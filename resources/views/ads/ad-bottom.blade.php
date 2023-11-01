<div class="mt-10 mb-5 text-center">
    @if ($appEnv === 'prod')
        @if ($adsEnabled)
            @if ($userAgent->isMobile())

            @else
                <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:600px"
                     data-ad-client="ca-pub-9047305524185109"
                     data-ad-slot="9699556503"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            @endif
        @endif
    @else
        reklama bottom
    @endif
</div>
