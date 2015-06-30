<h1>Title: wpcf_fields_slug_(slug)_value_get</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_fields_slug_slug_value_get.php">http://iworks.pl/types/filters/wpcf_fields_slug_slug_value_get.php</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_fields_slug_(slug)_value_get</b> filter is used to filter
the value of a meta field. This filter is called only for the specified slug.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$meta</tt></dt>
    <dd>(<i>string</i>) (<i>required</i>) Meta value to be filtered.
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
<p>For the field with the name "Email" and the slug "email", a span with microdata variables will be added:</p>
<pre>[code type="php"]
function my_wpcf_fields_slug_phone_value_get($meta, $field)
{
    /**
     * Avoid changes if empty value
     */
    if (empty($meta)) {
        return $meta;
    }
    return sprintf('&lt;span itemprop="telephone"&gt;%s&lt;/span&gt;', $meta);
}
add_filter('wpcf_fields_slug_phone_value_get', 'my_wpcf_fields_slug_phone_value_get', 10, 2);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_fields_slug_ is located in: embedded/classes/field.php, embedded/classes/usermeta_field.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>

<a name="See_Also" id="See_Also"></a><h2>See Also</h2>
<ul>
    <li><a href="wpcf_fields_slug_slug_value_display.html">wpcf_fields_slug_(slug)_value_display</a></li>
    <li><a href="wpcf_fields_slug_slug_value_save.html">wpcf_fields_slug_(slug)_value_save</a></li>
</ul>

