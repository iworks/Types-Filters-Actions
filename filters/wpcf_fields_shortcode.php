<h1>Title: wpcf_fields_shortcode</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_fields_shortcode.php">http://iworks.pl/types/filters/wpcf_fields_shortcode.php</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_fields_shortcode</b> filter is used to filter the shortcode
inserted on the post editing screen using the modal window to choose Types fields and its
options.</p>

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
<p>If a shortcode has the defined "width" parameter, and if it is lower then 450 change
it to 450px.</p> <pre>[code type="php"]
function my_wpcf_fields_shortcode($shortcode, $field)
{
    if ( preg_match('/ width="(\d+)"/', $shortcode, $matches ) ) {
        if ( count($matches) &gt; 1 &amp;&amp; $matches[1] &lt; 450 ) {
            return preg_replace('/ width="\d+"/', ' width="450"', $shortcode);
        }
    }
    return $shortcode;
}
add_filter('wpcf_fields_shortcode', 'my_wpcf_fields_shortcode', 10, 2);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_fields_shortcode is located in: embedded/includes/fields.php, embedded/usermeta-init.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>

<a name="See_Also" id="See_Also"></a><h2>See Also</h2>
<ul>
    <li><a href="wpcf_fields_shortcode_slug_slug.html">wpcf_fields_shortcode_slug_slug</a></li>
    <li><a href="wpcf_fields_shortcode_type_type.html">wpcf_fields_shortcode_type_type</a></li>
    <li><a href="wpcf_fields_image_editor_submit_field.html">wpcf_fields_image_editor_submit_field</a></li>
</ul>

