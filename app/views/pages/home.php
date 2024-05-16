<h2>Books</h2>

<ul>
    <?php foreach($books as $book): ?>
        <li>
            <?php echo $books('title'); ?>
        </li>
        <?php endforeach; ?>
</ul>

<h2>Authors</h2>

<ul>
    <?php foreach($authors as $author): ?>
        <li>
            <?php echo $author('firstname'); ?>
            <?php echo $author('lastname'); ?>
        </li>
        <?php endforeach; ?>
</ul>