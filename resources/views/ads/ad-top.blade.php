<div class="my-5 text-center">
    @if ($appEnv === 'prod')
        @if ($adsEnabled)
            @if ($userAgent->isMobile())
                <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:600px"
                     data-ad-client="ca-pub-9047305524185109"
                     data-ad-slot="4232086331"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            @else
                <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:250px"
                     data-ad-client="ca-pub-9047305524185109"
                     data-ad-slot="2555563658"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            @endif
        @endif
    @else
        @if ($userAgent->isMobile())
            reklama top mobile
        @else
            reklama top not mobile
        @endif
    @endif
</div>
