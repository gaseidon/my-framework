<p>Главная страница</p>

<? foreach ($news as $val): ?>
    <h3><?= $val['title']; ?></h3>
    <p><?= $val['description']; ?></p>
    <hr>
<? endforeach; ?>
