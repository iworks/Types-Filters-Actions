<h1>Title: wpcf_fields_value_save</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_fields_value_save.php">http://iworks.pl/types/filters/wpcf_fields_value_save.php</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_fields_value_save</b> filter is used to filter the
value of a meta field before saving it to the database.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$meta</tt></dt>
    <dd>(<i>string</i>) (<i>required</i>) Meta value to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$slug</tt></dt>
    <dd>(<i>string</i>) Custom field slug.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$config</tt></dt>
    <dd>(<i>array</i>) Custom field configuration data.
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
    <dd>Filtered meta value.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>Before saving the field of the "Email" type, fix the missing dot before the "com" suffix but
first check the $slug of the field.</p>
<pre>[code type="php"]
function my_wpcf_fields_value_save($meta, $slug, $config, $field)
{
    /**
     * return if field have different slug
     */
    if ( 'second-email' != $slug ) {
    }
    /**
     * return if $meta is empty
     */
    if (empty($meta)) {
        return $meta;
    }
    /**
     * fix com address
     */
    return preg_replace('/([^\.])com/', '$1.com', $meta );
}
add_filter('wpcf_fields_value_save', 'my_wpcf_fields_value_save', 10, 3);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_fields_value_save is located in: embedded/classes/field.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>

<a name="See_Also" id="See_Also"></a><h2>See Also</h2>
<ul>
    <li><a href="wpcf_fields_value_display.html">wpcf_fields_value_display</a></li>
    <li><a href="wpcf_fields_value_get.html">wpcf_fields_value_get</a></li>
</ul>
