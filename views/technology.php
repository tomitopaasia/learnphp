<?php
$title = 'Technology';
$posts = [
  [
    'title' => 'How technology is changing everyday life',
    'content' => 'New tools are making work, learning, and communication faster and more accessible.',
    'date' => 'January 1, 2021',
    'author' => 'Pets',
  ],
  [
    'title' => 'The next generation of useful devices',
    'content' => 'Thoughtful hardware design helps people solve real problems without adding friction.',
    'date' => 'January 2, 2021',
    'author' => 'Juss',
  ],
  [
    'title' => 'Building better software experiences',
    'content' => 'Reliable, simple software gives people more time to focus on what matters.',
    'date' => 'January 3, 2021',
    'author' => 'Alex',
  ],
  [
    'title' => 'What comes after the smartphone?',
    'content' => 'The next wave of personal technology will be shaped by context, privacy, and convenience.',
    'date' => 'January 4, 2021',
    'author' => 'Manivald',
  ],
];

?>

<?php include __DIR__ . '/assets/partials/header.php'; ?>

<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/assets/partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/assets/partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/assets/partials/footer.php'; ?>
