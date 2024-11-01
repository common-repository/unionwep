<?php
/*
Plugin Name: UNIONWEP
Plugin URI: http://www.unionwep.com
Description: This is a unique plugin for photographers Unionwep members.. Este es el plugin exclusivo para los fotógrafos de  miembros Unionwep.. Después de instalarlo podrás publicar tus últimas actualizaciones en el área Inspired de Unionwep de forma totalmente automática.
Version: 1.0
Author: Antonio Ruano
Author URI: http://www.antonioruano.es/
*/
add_action('submitpost_box', 'unionwep');
function unionwep() {
    $titulo = get_bloginfo('name');
    $link = get_permalink($post->ID);
?>

<div class="postbox">
<h3 class='hndle'><span>UNIONWEP</span></h3>
<div class="inside">
<p>
<a href="../wp-content/plugins/unionwep/enviar_unionwep.php?titulo=<?php echo $titulo; ?>&link=<?php echo $link; ?>" target="popup"
onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=0 , scrollbars=0 , resizable=0 ,left='+parseInt(((screen.width) / 2) - 250)+',top='+parseInt(((screen.height) / 2) - 75)+',width=500px,height=175px'); return false;">
Publicar en UnionWEP
</a>
</p>
</div>
</div>

<?php
}
?>