<div class="relative py-32  bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-20">
      <h2 class="text-4xl font-bold mb-6 text-brand-gray-800">Featured Work</h2>
      <p class="text-brand-gray-600 text-lg">Explore some of our recent projects and see how we've helped businesses grow.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($projects as $project): ?>
        <div class="group relative">
          <div class="absolute inset-0 bg-gradient-to-r from-brand-primary-500 to-brand-secondary-500 rounded-2xl transform group-hover:rotate-2 transition-transform"></div>
          <div class="relative bg-white p-6 rounded-2xl shadow-lg">
            <img
              src="<?php echo $project['image']; ?>"
              alt="<?php echo $project['title']; ?>"
              width="400"
              height="300"
              loading="lazy"
              class="rounded-lg w-full h-auto mb-6" />
            <h3 class="text-xl font-bold mb-2 text-brand-gray-800"><?php echo $project['title']; ?></h3>
            <p class="text-brand-gray-600 mb-4"><?php echo $project['description']; ?></p>
            <div class="flex flex-wrap gap-2">
              <?php foreach ($project['technologies'] as $tech): ?>
                <span class="px-3 py-1 bg-brand-primary-100 text-brand-primary-600 rounded-full text-sm hover:bg-brand-primary-200 transition-colors"><?php echo $tech; ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>