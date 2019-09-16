<?php 
$article_category = "";
if (!empty($categories)) {
    foreach ($categories as $category) {
        $article_category.= ".setTargeting('channel', ['".ucfirst($category->name)."'])";
    }
}
?>
<!-- Start GPT Head Tag - Homepage -->
<script async src='https://securepubads.g.doubleclick.net/tag/js/gpt.js'></script>
<script type="text/javascript" src="//ameyawdebrah.com/prebid.js" async></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {

    var AP_leaderboard_top_1 = googletag.sizeMapping()
    .addSize([1040, 0], [[970, 250], [970, 90], [728, 90]])
    .addSize([740, 0], [[728, 90]])
    .addSize([340, 0], [[300, 250], [320, 100], [320, 50]])
    .addSize([0, 0], [[250, 250]])
    .build();

    var AP_leaderboard_top_2 = googletag.sizeMapping()
    .addSize([1040, 0], [[970, 250], [970, 90], [728, 90]])
    .addSize([740, 0], [[728, 90]])
    .addSize([340, 0], [[300, 250], [320, 100], [320, 50]])
    .addSize([0, 0], [[250, 250]])
    .build();

    var AP_left_rectangle_top = googletag.sizeMapping()
    .addSize([1040, 0], [[160, 600], [200, 400]])
    .addSize([0, 0], [[200, 400]])
    .build();

    var AP_left_rectangle_bottom = googletag.sizeMapping()
    .addSize([1040, 0], [[160, 600], [200, 400]])
    .addSize([0, 0], [[200, 400]])
    .build();

    var AP_article_leaderboard_mid_1 = googletag.sizeMapping()
    .addSize([1040, 0], [[728, 90], [300, 250], [336, 280]])
    .addSize([740, 0], [[728, 90]])
    .addSize([340, 0], [[300, 250], [336, 280]])
    .addSize([0, 0], [[250, 250]])
    .build();

    var AP_article_leaderboard_mid_2 = googletag.sizeMapping()
    .addSize([1040, 0], [[300, 250]])
    .addSize([0, 0], [[250, 250]])
    .build();

    var AP_right_rectangle_top = googletag.sizeMapping()
    .addSize([1040, 0], [[336, 280], [300, 250]])
    .addSize([0, 0], [[300, 250], [250, 250]])
    .build();

    var AP_right_rectangle_mid_1 = googletag.sizeMapping()
    .addSize([1040, 0], [[300, 600], [336, 280], [300, 250]])
    .addSize([0, 0], [[300, 250], [250, 250]])
    .build();

    var AP_right_rectangle_mid_2 = googletag.sizeMapping()
    .addSize([1040, 0], [[336, 280], [300, 250]])
    .addSize([0, 0], [[300, 250], [250, 250]])
    .build();

    var AP_right_rectangle_bottom = googletag.sizeMapping()
    .addSize([1040, 0], [[300, 600], [336, 280], [300, 250]])
    .addSize([0, 0], [[300, 250], [250, 250]])
    .build();

    var AP_leaderboard_footer = googletag.sizeMapping()
    .addSize([1040, 0], [[970, 250], [970, 90], [728, 90]])
    .addSize([740, 0], [[728, 90]])
    .addSize([340, 0], [[300, 250], [320, 100], [320, 50]])
    .addSize([0, 0], [[250, 250]])
    .build();
    
    googletag.defineSlot('/10197549/ad_article_leaderboard_top1', [[970, 250]], 'div-gpt-ad-1567868847897-0')
    .defineSizeMapping(AP_leaderboard_top_1)
    .setTargeting('page', ['article'])
    <?php echo $article_category; ?>
    .addService(googletag.pubads());
    
    googletag.defineSlot('/10197549/ad_article_leaderboard_top2', [[970, 90]], 'div-gpt-ad-1567868957611-0')
    .defineSizeMapping(AP_leaderboard_top2)
    .setTargeting('page', ['article'])
    <?php echo $article_category; ?>
    .addService(googletag.pubads());
    
    googletag.defineSlot('/10197549/ad_article_leaderboard_mid_1', [[728, 90]], 'div-gpt-ad-1567868733015-0')
    .defineSizeMapping(AP_leaderboard_mid_1)
    .setTargeting('page', ['article'])
    <?php echo $article_category; ?>
    .addService(googletag.pubads());
    
    googletag.defineSlot('/10197549/ad_article_leaderboard_mid_2', [[300, 250]], 'div-gpt-ad-1567868799816-0')
    .defineSizeMapping(AP_leaderboard_mid_2)
    .setTargeting('page', ['article'])
    <?php echo $article_category; ?>
    .addService(googletag.pubads());
    
    googletag.defineSlot('/10197549/ad_article_left_rectangle_top', [[200, 400]], 'div-gpt-ad-1567869321415-0')
    .defineSizeMapping(AP_left_rectangle_top)
    .setTargeting('page', ['article'])
    <?php echo $article_category; ?>
    .addService(googletag.pubads());
    
    googletag.defineSlot('/10197549/ad_article_left_rectangle_bottom', [[200, 400]], 'div-gpt-ad-1567868996557-0')
    .defineSizeMapping(AP_left_rectangle_bottom)
    .setTargeting('page', ['article'])
    <?php echo $article_category; ?>
    .addService(googletag.pubads());
    
    googletag.defineSlot('/10197549/ad_article_right_rectangle_top', [[300, 250]], 'div-gpt-ad-1567869074355-0')
    .defineSizeMapping(AP_right_rectangle_top)
    .setTargeting('page', ['article'])
    <?php echo $article_category; ?>
    .addService(googletag.pubads());
    
    googletag.defineSlot('/10197549/ad_article_right_rectangle_mid1', [[300, 250]], 'div-gpt-ad-1567869153277-0')
    .defineSizeMapping(AP_right_rectangle_mid_1)
    .setTargeting('page', ['article'])
    <?php echo $article_category; ?>
    .addService(googletag.pubads());
    
    googletag.defineSlot('/10197549/ad_article_right_rectangle_mid2', [[300, 250]], 'div-gpt-ad-1567869187257-0')
    .defineSizeMapping(AP_right_rectangle_mid_2)
    .setTargeting('page', ['article'])
    <?php echo $article_category; ?>
    .addService(googletag.pubads());
    
    googletag.defineSlot('/10197549/ad_article_right_rectangle_bottom', [[300, 600]], 'div-gpt-ad-1567869410754-0')
    .defineSizeMapping(AP_right_rectangle_bottom)
    .setTargeting('page', ['article'])
    <?php echo $article_category; ?>
    .addService(googletag.pubads());
    
    googletag.defineSlot('/10197549/ad_article_leaderboard_footer', [[970, 250]], 'div-gpt-ad-1567868628905-0')
    .defineSizeMapping(AP_leaderboard_footer)
    .setTargeting('page', ['article'])
    <?php echo $article_category; ?>
    .addService(googletag.pubads());

    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs();
    googletag.pubads().setCentering(true);
    googletag.pubads().disableInitialLoad();
    googletag.enableServices();
  });
</script>

<script>
!function(a9,a,p,s,t,A,g){if(a[a9])return;function q(c,r){a[a9]._Q.push([c,r])}a[a9]={init:function(){q("i",arguments)},fetchBids:function(){q("f",arguments)},setDisplayBids:function(){},targetingKeys:function(){return[]},_Q:[]};A=p.createElement(s);A.async=!0;A.src=t;g=p.getElementsByTagName(s)[0];g.parentNode.insertBefore(A,g)}("apstag",window,document,"script","//c.amazon-adsystem.com/aax2/apstag.js");

apstag.init({
     pubID: '33ad62c7-3412-4428-a63e-5fe3c8ffc47f',
     adServer: 'googletag'
});
apstag.fetchBids({
     slots: [{
         slotID: 'div-gpt-ad-1567868847897-0', 
         slotName: '/10197549/ad_article_leaderboard_top1', 
         sizes: [[970, 250], [970, 90], [728, 90], [300, 250], [320, 100], [320, 50], [250, 250]]
	 },
	 {
         slotID: 'div-gpt-ad-1567868957611-0', 
         slotName: '/10197549/ad_article_leaderboard_top2', 
         sizes: [[970, 250], [970, 90], [728, 90], [300, 250], [320, 100], [320, 50], [250, 250]]
    },
	 {
         slotID: 'div-gpt-ad-1567868733015-0', 
         slotName: '/10197549/ad_article_leaderboard_mid_1', 
         sizes: [[728, 90], [336, 280], [300, 250], [250, 250]]
	 },
	 {
         slotID: 'div-gpt-ad-1567868799816-0', 
         slotName: '/10197549/ad_article_leaderboard_mid_2', 
         sizes: [[300, 250], [250, 250]]
	 },
	 {
         slotID: 'div-gpt-ad-1567869321415-0', 
         slotName: '/10197549/ad_article_left_rectangle_top', 
         sizes: [[160, 600], [200, 400]]
   },
   {
         slotID: 'div-gpt-ad-1567868996557-0', 
         slotName: '/10197549/ad_article_left_rectangle_bottom', 
         sizes: [[160, 600], [200, 400]]
	 },
	 {
         slotID: 'div-gpt-ad-1567869074355-0', 
         slotName: '/10197549/ad_article_right_rectangle_top', 
         sizes: [[300, 600], [336, 280], [300, 250], [250, 250]]
    },
    {
         slotID: 'div-gpt-ad-1567869153277-0', 
         slotName: '/10197549/ad_article_right_rectangle_mid1', 
         sizes: [[336, 280], [300, 250], [250, 250]]
	 },
	 {
         slotID: 'div-gpt-ad-1567869187257-0', 
         slotName: '/10197549/ad_article_right_rectangle_mid2', 
         sizes: [[336, 280], [300, 250], [250, 250]]
	 },
	 {
         slotID: 'div-gpt-ad-1567869410754-0', 
         slotName: '/10197549/ad_article_right_rectangle_bottom', 
         sizes: [[300, 600], [336, 280], [300, 250], [250, 250]]
	 },
	 {
         slotID: 'div-gpt-ad-1567868628905-0', 
         slotName: '/10197549/ad_article_leaderboard_footer', 
         sizes: [[970, 250], [970, 90], [728, 90], [300, 250], [320, 100], [320, 50], [250, 250]]
	 }],
     timeout: 2e3
}, function(bids) {
     	googletag.cmd.push(function(){
        apstag.setDisplayBids();
     });
}); 
</script>

<!-- Prebid Config Section START -->
<script> 
    var PREBID_TIMEOUT = 1000;
    var adUnits = [{
        code: 'div-gpt-ad-1567868847897-0',
        sizes: [[970, 250], [970, 90], [728, 90], [300, 250], [320, 100], [320, 50], [250, 250]],
        bids: [{
            bidder: 'smartadserver',
            params: {
               domain: 'https://prg.smartadserver.com',             
               siteId: '319752',
               pageId: '1140706',
               formatId: '82034','82035','82037','81869','82038','82039','83371',
            }
        }]
    },
    {
        code: 'div-gpt-ad-1567868957611-0',
        sizes: [[970, 250], [970, 90], [728, 90], [300, 250], [320, 100], [320, 50], [250, 250]],
        bids: [{
            bidder: 'smartadserver',
            params: {
               domain: 'https://prg.smartadserver.com',             
               siteId: '319752',
               pageId: '1140706',
               formatId: '82034','82035','82037','81869','82038','82039','83371',
            }
        }]
    },
    {
        code: 'div-gpt-ad-1567868733015-0',
        sizes: [[728, 90], [336, 280], [300, 250], [250, 250]],
        bids: [{
            bidder: 'smartadserver',
            params: {
               domain: 'https://prg.smartadserver.com',             
               siteId: '319752',
               pageId: '1140706',
               formatId: '82037','82077','81869','83371',
            }
        }]
    },
    {
        code: 'div-gpt-ad-1567868799816-0',
        sizes: [[300, 250], [250, 250]],
        bids: [{
            bidder: 'smartadserver',
            params: {
               domain: 'https://prg.smartadserver.com',             
               siteId: '319752',
               pageId: '1140706',
               formatId: '81869','83371',
            }
        }]
    },
    {
        code: 'div-gpt-ad-1567869321415-0',
        sizes: [[160, 600], [200, 400]],
        bids: [{
            bidder: 'smartadserver',
            params: {
               domain: 'https://prg.smartadserver.com',             
               siteId: '319752',
               pageId: '1140706',
               formatId: '82076','83370',
            }
        }]
    },
    {
        code: 'div-gpt-ad-1567869074355-0',
        sizes: [[160, 600], [200, 400]],
        bids: [{
            bidder: 'smartadserver',
            params: {
               domain: 'https://prg.smartadserver.com',             
               siteId: '319752',
               pageId: '1140706',
               formatId: '82076','83370',
            }
        }]
    },
    {
        code: 'div-gpt-ad-1567869074355-0',
        sizes: [[300, 600], [336, 280], [300, 250], [250, 250]],
        bids: [{
            bidder: 'smartadserver',
            params: {
               domain: 'https://prg.smartadserver.com',             
               siteId: '319752',
               pageId: '1140706',
               formatId: '82036','82077','81869','83371',
            }
        }]
    },
    {
        code: 'div-gpt-ad-1567869153277-0',
        sizes: [[336, 280], [300, 250], [250, 250]],
        bids: [{
            bidder: 'smartadserver',
            params: {
               domain: 'https://prg.smartadserver.com',             
               siteId: '319752',
               pageId: '1140706',
               formatId: '82077','81869','83371',
            }
        }]
    },
    {
        code: 'div-gpt-ad-1567869187257-0',
        sizes: [[336, 280], [300, 250], [250, 250]],
        bids: [{
            bidder: 'smartadserver',
            params: {
               domain: 'https://prg.smartadserver.com',             
               siteId: '319752',
               pageId: '1140706',
               formatId: '82077','81869','83371',
            }
        }]
    },
    {
        code: 'div-gpt-ad-1567868628905-0',
        sizes: [[970, 250], [970, 90], [728, 90], [300, 250], [320, 100], [320, 50], [250, 250]],
        bids: [{
            bidder: 'smartadserver',
            params: {
               domain: 'https://prg.smartadserver.com',             
               siteId: '319752',
               pageId: '1140706',
               formatId: '82034','82035','82037','81869','82038','82039','83371',
            }
        }]
    },
   ];
    
    var pbjs = pbjs || {};
    pbjs.que = pbjs.que || [];
  </script>
  <!-- Prebid Config Section END -->
  
  <!-- Prebid Boilerplate Section START. No Need to Edit. -->
  <script>
    pbjs.setConfig({
    currency: {
        "adServerCurrency": "EUR"
    }
    });
    pbjs.que.push(function() {
        pbjs.addAdUnits(adUnits);
        pbjs.requestBids({
            bidsBackHandler: sendAdserverRequest
        });
    });
    function sendAdserverRequest() {
        if (pbjs.adserverRequestSent) return;
        pbjs.adserverRequestSent = true;
        googletag.cmd.push(function() {
            pbjs.que.push(function() {
                pbjs.setTargetingForGPTAsync();
                 googletag.pubads().refresh();
            });
        });
    }
    setTimeout(function() {
        sendAdserverRequest();
    }, PREBID_TIMEOUT);

  </script>
<!-- Prebid Boilerplate Section END -->
<!-- End GPT Head Tag -->


<!-- Body Tags - Place these tags where ad-units will be displayed -->

<!-- /10197549/ad_article_leaderboard_top1 -->
<div id='div-gpt-ad-1567868847897-0'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567868847897-0'); });
  </script>
</div>

<!-- /10197549/ad_article_leaderboard_top2 -->
<div id='div-gpt-ad-1567868957611-0'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567868957611-0'); });
  </script>
</div>

<!-- /10197549/ad_article_left_rectangle_top -->
<div id='div-gpt-ad-1567869321415-0'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567869321415-0'); });
  </script>
</div>

<!-- /10197549/ad_article_leaderboard_mid_1 -->
<div id='div-gpt-ad-1567868733015-0'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567868733015-0'); });
  </script>
</div>

<!-- /10197549/ad_article_leaderboard_mid_2 -->
<div id='div-gpt-ad-1567868799816-0'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567868799816-0'); });
  </script>
</div>

<!-- /10197549/ad_article_left_rectangle_bottom -->
<div id='div-gpt-ad-1567868996557-0'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567868996557-0'); });
  </script>
</div>

<!-- /10197549/ad_article_right_rectangle_top -->
<div id='div-gpt-ad-1567869074355-0'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567869074355-0'); });
  </script>
</div>

<!-- /10197549/ad_article_right_rectangle_mid1 -->
<div id='div-gpt-ad-1567869153277-0'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567869153277-0'); });
  </script>
</div>

<!-- /10197549/ad_article_right_rectangle_mid2 -->
<div id='div-gpt-ad-1567869187257-0'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567869187257-0'); });
  </script>
</div>

<!-- /10197549/ad_article_right_rectangle_bottom -->
<div id='div-gpt-ad-1567869410754-0'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567869410754-0'); });
  </script>
</div>


<!-- /10197549/ad_article_leaderboard_footer -->
<div id='div-gpt-ad-1567868628905-0'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1567868628905-0'); });
  </script>
</div>

<!-- End Body Tags -->