<h1>Title: wpcf_fields_shortcode_type_(type)</h1>
<p>Location: <a href="http://wp-types.com/documentation/user-guides/types-filters/wpcf_fields_shortcode_type_type/">http://wp-types.com/documentation/user-guides/types-filters/wpcf_fields_shortcode_type_type/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_fields_shortcode_type_(type)</b> filter is used to filter the shortcode
inserted on the post editing screen using a modal window to choose the Types fields and its
options. It is called only for the specific field type.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$shortcode</tt></dt>
    <dd>(<i>string</i>) (<i>required</i>) Existing shortcode to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$field</tt></dt>
    <dd>(<i>object</i>) WPCF_Field or WPCF_Usermeta_Field object.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(string)</tt></dt>
    <dd>Filered shortcode.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>Change the title in the inserted shortcode so that it includes the edited post title.</p>
<pre>[code type="php"]
function my_wpcf_fields_shortcode_type_image($shortcode, $field)
    if ( array_key_exists('post_id', $_GET) ) {
        if ( intval($_GET['post_id'])) {
            $title = get_the_title(intval($_GET['post_id']));
            if ( preg_match('/ title="([^"]*")/', $shortcode, $matches ) ) {
                $title .= ': '.$matches[1];
            } else {
                $shortcode = preg_replace( '/\]\[/', ' title=""][', $shortcode);
            }
            $title = sprintf(' title="%s"', esc_html($title));
            return preg_replace('/ title="[^"]*"/', $title, $shortcode );
        }
    }
    return $shortcode;
{
}
add_filter('wpcf_fields_shortcode_type_imge', 'my_wpcf_fields_shortcode_type_imge', 10, 2);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_fields_shortcode_type_type is located in: embedded/includes/fields.php, embedded/usermeta-init.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>

<a name="See_Also" id="See_Also"></a><h2>See Also</h2>
<ul>
    <li><a href="wpcf_fields_shortcode.html">wpcf_fields_shortcode</a></li>
    <li><a href="wpcf_fields_shortcode_slug_slug.html">wpcf_fields_shortcode_slug_slug</a></li>
    <li><a href="wpcf_fields_image_editor_submit_field.html">wpcf_fields_image_editor_submit_field</a></li>
</ul>

