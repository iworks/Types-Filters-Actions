<h1>Title: wpcf_fields_shortcode_slug_(slug)</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_fields_shortcode_slug_slug.php">http://iworks.pl/types/filters/wpcf_fields_shortcode_slug_slug.php</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_fields_shortcode_slug_(slug)</b> filter is used to filter
the shortcode before displaying it in the editor.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$classes</tt></dt>
    <dd>(<i>string</i>) (<i>required</i>) Existing shortcode to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$field</tt></dt>
    <dd>(<i>array</i>) Field used in shortcode configuration.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(array)</tt></dt>
    <dd></dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>For a field named "MY Video" with a slug "my-video" do this: if shortcode has a defined "width" parameter, and if it is lower then 450 change
it to 450px.</p> <pre>[code type="php"]
function my_wpcf_fields_shortcode_slug_my_video($shortcode, $field)
{
    if ( preg_match('/ width="(\d+)"/', $shortcode, $matches ) ) {
        if ( count($matches) &gt; 1 &amp;&amp; $matches[1] &lt; 450 ) {
            return preg_replace('/ width="\d+"/', ' width="450"', $shortcode);
        }
    }
    return $shortcode;
}
add_filter('wpcf_fields_shortcode_slug_my-video', 'my_wpcf_fields_shortcode_slug_my_video', 10, 2);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_fields_shortcode_slug_ is located in: embedded/includes/fields.php, embedded/usermeta-init.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>

<a name="See_Also" id="See_Also"></a><h2>See Also</h2>
<ul>
    <li><a href="wpcf_fields_shortcode.html">wpcf_fields_shortcode</a></li>
    <li><a href="wpcf_fields_shortcode_type_type.html">wpcf_fields_shortcode_type_type</a></li>
    <li><a href="wpcf_fields_image_editor_submit_field.html">wpcf_fields_image_editor_submit_field</a></li>
</ul>

