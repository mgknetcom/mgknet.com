<div class="relative py-32 bg-brand-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto">
      <h2 class="text-4xl font-bold mb-6 text-brand-gray-800">Our Solutions</h2>
      <p class="text-brand-gray-600 text-lg">We specialize in creating custom web applications that solve real business challenges.</p>
    </div>

    <div class="mt-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($solutions as $solution): ?>
        <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all">
          <div class="w-12 h-12 bg-gradient-to-r from-brand-primary-500 to-brand-secondary-500 rounded-lg flex items-center justify-center mb-6">
            <?php echo $solution['icon']; ?>
          </div>
          <h3 class="text-xl font-bold mb-4 text-brand-gray-800"><?php echo $solution['title']; ?></h3>
          <p class="text-brand-gray-600 leading-relaxed"><?php echo $solution['description']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>