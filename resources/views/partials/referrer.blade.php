<script>
    (() => {
        const referrer = new URLSearchParams(window.location.search).get('referrer');

        if (referrer) {
            document.cookie = `referrer=${encodeURIComponent(referrer)}; max-age=7200; path=/; samesite=lax`;
        }

        const rememberedReferrer = referrer || decodeURIComponent((document.cookie.match(/(?:^|; )referrer=([^;]*)/) || [])[1] || '');

        if (! rememberedReferrer) {
            return;
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('a[href^="https://spatie.be"]').forEach((link) => {
                const url = new URL(link.href);

                url.searchParams.set('referrer', rememberedReferrer);

                link.href = url.toString();
            });
        });
    })();
</script>
