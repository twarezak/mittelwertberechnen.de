<div class="my-5 text-center">
    @if ($appEnv === 'prod')
        @if ($adsEnabled)
            <div class="text-xs">Werbung</div>
            @if ($userAgent->isMobile())
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-9047305524185109"
                     data-ad-slot="5215819348"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            @else
                <ins class="adsbygoogle"
                     style="display:inline-block;width:750px;height:300px"
                     data-ad-client="ca-pub-9047305524185109"
                     data-ad-slot="3830769269"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            @endif
        @endif
    @else
        reklama title
    @endif
</div>
