<h1>Title: wpcf_fields_image_editor_submit_field</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_fields_image_editor_submit_field.php">http://iworks.pl/types/filters/wpcf_fields_image_editor_submit_field.php</a></p>

<a name="Description" id="Description"></a><h2>Description</h2> <p>The
<b>wpcf_fields_image_editor_submit_field</b> filter is used to filter the data
of modal windows which are used to create the fields of the "Image" type. This filter doesn't
have an effect on the output itself but instead, the data filtered by it needs to be used by other shortcodes; specifically: wpcf_fields_shortcode, wpcf_fields_shortcode_slug_slug and
wpcf_fields_shortcode_type_type.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$classes</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing field data to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(array)</tt></dt>
    <dd>Field data.</dd>
</dl>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_fields_image_editor_submit_field is located in: embedded/includes/fields/image.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.3</p>

<a name="See_Also" id="See_Also"></a><h2>See Also</h2>
<ul>
    <li><a href="wpcf_fields_shortcode.html">wpcf_fields_shortcode</a></li>
    <li><a href="wpcf_fields_shortcode_slug_slug.html">wpcf_fields_shortcode_slug_slug</a></li>
    <li><a href="wpcf_fields_shortcode_type_type.html">wpcf_fields_shortcode_type_type</a></li>
</ul>

