<nav>
    <ul>
        <li>
            <?php if ($direction === 'east'): ?>
                <form action="?direction=west" method="post">
                    <input type="hidden" name="page" value="<?php echo isset($_POST['page']) ? $_POST['page'] : 'home'; ?>">
                    <button type="submit">West</button>
                </form>
            <?php else: ?>
                <form action="?direction=east" method="post">
                    <input type="hidden" name="page" value="<?php echo isset($_POST['page']) ? $_POST['page'] : 'home'; ?>">
                    <button type="submit">East</button>
                </form>
            <?php endif; ?>
        </li>
        <li>
            <form method="post" action="?direction=<?php echo $direction; ?>">
                <input type="hidden" name="page" value="home">
                <button type="submit">Home</button>
            </form>
        </li>
        <li>
            <form method="post" action="?direction=<?php echo $direction; ?>&page=about">
                <input type="hidden" name="page" value="about">
                <button type="submit">About</button>
            </form>
        </li>
        <li>
            <form method="post" action="?direction=<?php echo $direction; ?>&page=work">
                <input type="hidden" name="page" value="work">
                <button type="submit">Work</button>
            </form>
        </li>
    </ul>
</nav>
