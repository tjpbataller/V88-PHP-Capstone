<footer>
    <form action="orders/add" method="post" id="order-create">
        <?= form_open() ?>
        <input type="text" name="description">
        <input type="submit" value="Submit">
        <?= form_close() ?>
    </form>
</footer>
</body>
</html>