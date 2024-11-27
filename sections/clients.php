<div class="py-24 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <?php if (!empty($clientsTitle)): ?>
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-4xl font-bold mb-6"><?php echo $clientsTitle; ?></h2>
        <?php if (!empty($clientsDescription)): ?>
          <p class="text-gray-600 text-lg"><?php echo $clientsDescription; ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 items-center justify-items-center">
      <?php foreach ($clients as $client): ?>
        <div class="w-full aspect-[2/1] flex items-center justify-center p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-all">
          <div class="relative w-full h-full">
            <?php if (!empty($client['url'])): ?>
              <a href="<?php echo $client['url']; ?>"
                rel="nofollow"
                target="_blank"
                class="block w-full h-full"
                aria-label="Visit <?php echo htmlspecialchars($client['name']); ?>'s website">
              <?php endif; ?>

              <img
                src="<?php echo $client['logo']; ?>"
                alt="<?php echo htmlspecialchars($client['name']); ?> logo - <?php echo htmlspecialchars($client['altText'] ?? 'Client of MGKnet'); ?>"
                class="absolute inset-0 w-full h-full object-contain"
                loading="lazy">

              <?php if (!empty($client['url'])): ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>