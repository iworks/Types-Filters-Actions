<h1>Title: wpcf_fields_slug_(slug)_value_get</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_fields_slug_slug_value_get.php">http://iworks.pl/types/filters/wpcf_fields_slug_slug_value_get.php</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_fields_slug_(slug)_value_get</b> filter is used to filter
the value of a meta field. This filter is called only for the specified slug, before saving the value to the database.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$meta</tt></dt>
    <dd>(<i>string</i>) (<i>required</i>) Meta value to be filtered.
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
<p>Fix the missing dot before "com" sufix before saving the value of a field with the slug "email":</p>
<pre>[code type="php"]
function my_wpcf_fields_slug_email_value_save($meta, $config, $field)
{
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
add_filter('wpcf_fields_slug_email_value_save', 'my_wpcf_fields_slug_email_value_save', 10, 3);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_fields_slug_ is located in: embedded/classes/field.php, embedded/classes/usermeta_field.php, embedded/frontend.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>

<a name="See_Also" id="See_Also"></a><h2>See Also</h2>
<ul>
    <li>filter: <a href="./wpcf_fields_value_get.html">wpcf_fields_value_get</a></li>
    <li>filter: <a href="./wpcf_fields_type_type_value_get.html">wpcf_fields_type_(type)_value_get</a></li>
</ul>

