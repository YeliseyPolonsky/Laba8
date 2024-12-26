<?php get_header(); ?>

<main class="error-404" style="text-align: center; padding: 50px;">
    <h1>Ошибка 404 — Страница не найдена</h1>
    <p>К сожалению, страница, которую вы ищете, не существует или была удалена.</p>
    <p>Попробуйте перейти на <a href="<?php echo home_url(); ?>">главную страницу</a> или воспользуйтесь поиском.</p>

    <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
        <label class="screen-reader-text" for="s">Поиск:</label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Поиск...">
        <input type="submit" id="searchsubmit" value="Найти">
    </form>
</main>

<?php get_footer(); ?>