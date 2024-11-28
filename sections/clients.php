<div class="py-24 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <h2 class="text-4xl font-bold mb-6">Part of our Clients</h2>
    </div>
    <div class="relative overflow-hidden">
      <div class="flex animate-scroll">
        <?php foreach (array_merge($clients, $clients, $clients) as $client): ?>
          <div class="flex-none w-[200px] px-4">
            <div class="h-24 flex items-center justify-center p-4 bg-white rounded-xl shadow-sm">
              <div class="w-full h-full relative">
                <?php if (!empty($client['url'])): ?>
                  <a href="<?php echo $client['url']; ?>"
                    rel="nofollow"
                    target="_blank"
                    class="block w-full h-full"
                    title="Visit <?php echo htmlspecialchars($client['name']); ?>'s website"
                    aria-label="Visit <?php echo htmlspecialchars($client['name']); ?>'s website">
                  <?php endif; ?>

                  <img
                    src="<?php echo $client['logo']; ?>"
                    alt="<?php echo htmlspecialchars($client['name']); ?> logo - <?php echo htmlspecialchars($client['altText'] ?? 'Client of MGKnet'); ?>"
                    class="w-full h-full object-contain"
                    loading="lazy">

                  <?php if (!empty($client['url'])): ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>