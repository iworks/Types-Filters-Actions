<h1>Title: wpcf_exclude_meta_boxes_on_post_type</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_exclude_meta_boxes_on_post_type.php">http://iworks.pl/types/filters/wpcf_exclude_meta_boxes_on_post_type.php</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_exclude_meta_boxes_on_post_type</b> filter is used to filter which posts types are immune to wpcf_exclude_meta_boxes_on_post_type() function. To avoid Types metaboxes on certain post types.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$post_types</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing post types to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(array)</tt></dt>
    <dd>Post type to turn of Types meta boxes.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p></p>
<pre>[code type="php"]
function my_wpcf_exclude_meta_boxes_on_post_type($post_types)
{
    $post_types[] = 'my-post-type';
    return $post_types;
}
add_filter('wpcf_exclude_meta_boxes_on_post_type', 'my_wpcf_exclude_meta_boxes_on_post_type', 10, 1);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_exclude_meta_boxes_on_post_type is located in: embedded/includes/fields-post.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.9.0</p>
