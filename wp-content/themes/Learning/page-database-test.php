<?php
get_header();
if(have_posts()):
    while(have_posts()):the_post();

        ?>
        <article class="page">
            <h2><?php the_title(); ?></h2>

        </article>



        <?php
    endwhile;
else:
    echo '<p>No content found</p>';

endif;

?>


<?php
global $wpdb;

$sql = "SELECT id, name, price FROM test";
$results = $wpdb->get_results($sql);  // return an object, not ARRAY_N
if ($results) {








?>
<table class="dbtest">
    <tr>
        <th>ID</th>
        <th>Name </th>
        <th>Price</th>
    </tr>
    <tr>
       <?php

       foreach ($results as $row) {
           // Each $row is a row from the query
           echo '<tr>';
           echo '<td>' . $row->id. '</td>';
           echo '<td>' . $row->name. '</td>';
           echo '<td>' . $row->price. ' &#8362; </td>';
           echo '</tr>';
       }
       ?>
    </tr>

</table>


<?php
}
get_footer();
?>




