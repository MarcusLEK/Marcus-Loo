#!/usr/bin/env bash
# Renders the Open Graph share card to assets/og.png.
#
#   ./inc/render-og.sh          # dark (default, what the site ships)
#   ./inc/render-og.sh light    # light variant
#
# Edit the matching inc/og-source*.html first, then re-run. Bump $ASSET_VERSION
# in inc/config.php afterwards so caches and social scrapers pick up the change.
set -euo pipefail

variant="${1:-dark}"
root="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

case "$variant" in
    dark)  source_file="inc/og-source.html" ;;
    light) source_file="inc/og-source-light.html" ;;
    *)     echo "usage: $0 [dark|light]" >&2; exit 1 ;;
esac

chrome="$(command -v chromium || command -v chromium-browser || command -v google-chrome || true)"
if [[ -z "$chrome" ]]; then
    echo "error: no chromium/chrome binary found on PATH" >&2
    exit 1
fi

port=8971
php -S "127.0.0.1:$port" -t "$root" >/dev/null 2>&1 &
server=$!
trap 'kill $server 2>/dev/null || true' EXIT
sleep 1

# Snap-confined Chromium can only write inside $HOME, and not into dot-directories,
# so render to a plain $HOME temp dir and copy the result into the repo.
tmp="$(mktemp -d "$HOME/og-render-XXXXXX")"
trap 'kill $server 2>/dev/null || true; rm -rf "$tmp"' EXIT

(
    cd "$tmp"
    "$chrome" --headless --no-sandbox --disable-gpu --hide-scrollbars \
        --window-size=1200,630 --virtual-time-budget=8000 \
        --screenshot=og.png "http://127.0.0.1:$port/$source_file" >/dev/null 2>&1
)

cp "$tmp/og.png" "$root/assets/og.png"
echo "rendered $variant -> assets/og.png ($(du -h "$root/assets/og.png" | cut -f1))"
