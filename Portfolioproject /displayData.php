<?php
/*
 *
 *
 */
function selectHomepageData()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=project2', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("SELECT `text_content` FROM `Project2` WHERE `content_name` = 'homepage' ORDER BY `id` DESC LIMIT 1;");
    $query->execute();
    $results = $query->fetch();
    return  $results['text_content'];
}
/*
 * this function selects data from the about page
 *
 */
function selectAboutpageData()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=project2', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("SELECT `text_content` FROM `Project2` WHERE `content_name` = 'aboutpage' ORDER BY `id` DESC LIMIT 1;");
    $query->execute();
    $results = $query->fetch();
    return $results['text_content'];
}
/*
 * This functions selects data from the portfolio page
 *
 */
function selectPortfoliopageData()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=project2', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("SELECT `id`, `text_content` FROM `Project2` WHERE `content_name` = 'portfoliopage' ORDER BY `id` DESC LIMIT 9;");
    $query->execute();
    $results = $query->fetchAll();
    return $results;
}