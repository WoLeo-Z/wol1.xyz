<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/theme/<?php echo e($theme); ?>/assets/components.chunk.css?v=<?php echo e($version); ?>">
    <link rel="stylesheet" href="/theme/<?php echo e($theme); ?>/assets/umi.css?v=<?php echo e($version); ?>">
    <?php if(file_exists(public_path("/theme/{$theme}/assets/custom.css"))): ?>
        <link rel="stylesheet" href="/theme/<?php echo e($theme); ?>/assets/custom.css?v=<?php echo e($version); ?>">
    <?php endif; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <?php ($colors = [
        'darkblue' => '#3b5998',
        'black' => '#343a40',
        'default' => '#0665d0',
        'green' => '#319795'
    ]); ?>
    <meta name="theme-color" content="<?php echo e($colors[$theme_config['theme_color']]); ?>">

    <title><?php echo e($title); ?></title>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700"> -->
    <script>window.routerBase = "/";</script>
    <script>
        window.settings = {
            title: '<?php echo e($title); ?>',
            theme_path: '<?php echo e($theme_path); ?>',
            theme: {
                sidebar: '<?php echo e($theme_config['theme_sidebar']); ?>',
                header: '<?php echo e($theme_config['theme_header']); ?>',
                color: '<?php echo e($theme_config['theme_color']); ?>',
            },
            version: '<?php echo e($version); ?>',
            background_url: '<?php echo e($theme_config['background_url']); ?>',
            description: '<?php echo e($description); ?>',
            i18n: [
                'zh-CN',
                'en-US',
                'ja-JP',
                'vi-VN',
                'ko-KR',
                'zh-TW'
            ],
            logo: '<?php echo e($logo); ?>'
        }
    </script>
    <script src="/theme/<?php echo e($theme); ?>/assets/i18n/zh-CN.js?v=<?php echo e($version); ?>"></script>
    <script src="/theme/<?php echo e($theme); ?>/assets/i18n/zh-TW.js?v=<?php echo e($version); ?>"></script>
    <script src="/theme/<?php echo e($theme); ?>/assets/i18n/en-US.js?v=<?php echo e($version); ?>"></script>
    <script src="/theme/<?php echo e($theme); ?>/assets/i18n/ja-JP.js?v=<?php echo e($version); ?>"></script>
    <script src="/theme/<?php echo e($theme); ?>/assets/i18n/vi-VN.js?v=<?php echo e($version); ?>"></script>
    <script src="/theme/<?php echo e($theme); ?>/assets/i18n/ko-KR.js?v=<?php echo e($version); ?>"></script>
</head>

<body>
<div id="root"></div>
<?php echo $theme_config['custom_html']; ?>

<script src="/theme/<?php echo e($theme); ?>/assets/vendors.async.js?v=<?php echo e($version); ?>"></script>
<script src="/theme/<?php echo e($theme); ?>/assets/components.async.js?v=<?php echo e($version); ?>"></script>
<script src="/theme/<?php echo e($theme); ?>/assets/umi.js?v=<?php echo e($version); ?>"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P1E9Z5LRRK"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-P1E9Z5LRRK');
</script>
<?php if(file_exists(public_path("/theme/{$theme}/assets/custom.js"))): ?>
    <script src="/theme/<?php echo e($theme); ?>/assets/custom.js?v=<?php echo e($version); ?>"></script>
<?php endif; ?>
</body>

</html>
<?php /**PATH /www/wwwroot/woleo.cf/public/theme/v2board/dashboard.blade.php ENDPATH**/ ?>