<!-- clients.php -->
<div class="py-24 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <h2 class="text-4xl font-bold mb-6">Trusted By</h2>
      <p class="text-gray-600 text-lg">Companies we've helped grow and succeed.</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 items-center justify-items-center">
      <?php foreach ($clients as $client): ?>
        <div class="w-40 h-20 flex items-center justify-center p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-all">
          <?php if (pathinfo($client['logo'], PATHINFO_EXTENSION) === 'svg'): ?>
            <img src="<?php echo $client['logo']; ?>"
              alt="<?php echo $client['name']; ?>"
              class="w-full h-full object-contain"
              loading="lazy">
          <?php else: ?>
            <img src="<?php echo $client['logo']; ?>"
              alt="<?php echo $client['name']; ?>"
              class="w-full h-full object-contain"
              loading="lazy"
              width="160"
              height="80">
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>