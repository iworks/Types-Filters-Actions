<h1>Title: wpcf_fields_type_(type)_value_display</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_fields_type_type_value_display.php">http://iworks.pl/types/filters/wpcf_fields_type_type_value_display/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_fields_type_(type)_value_display.html</b> filter is used to filter
the value of a meta field. This filter is called only for the specified field type.</p>

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
    <dt><tt>$post_ID</tt></dt>
    <dd>(<i>ineteger</i>) Current post ID.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$field_ID</tt></dt>
    <dd>(<i>ineteger</i>) Field ID.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$meta_ID</tt></dt>
    <dd>(<i>ineteger</i>) Current post meta ID.
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
<p>Hide the first part of a domain for the field type "email":</p>
<pre>[code type="php"]
function my_wpcf_fields_type_email_value_display($meta, $config, $post_ID, $field_ID, $meta_id)
{
    /**
     * return if empty value
     */
    if (empty($meta)) {
        return $meta;
    }
    return preg_replace('/@[^\.]+/', '@[hidden-domain]', $meta);
}
add_filter('wpcf_fields_type_email_value_display', 'my_wpcf_fields_type_email_value_display', 10, 5);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_fields_type_(type)_value_display is located in: embedded/frontend.php.</p>


<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>

<a name="See_Also" id="See_Also"></a><h2>See Also</h2>
<ul>
    <li>filter: <a href="./wpcf_fields_value_display.html">wpcf_fields_value_display</a></li>
    <li>filter: <a href="./wpcf_fields_slug_slug_value_display.html">wpcf_fields_slug_(slug)_value_display</a></li>
</ul>

