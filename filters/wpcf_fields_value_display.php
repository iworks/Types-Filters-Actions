<h1>Title: wpcf_fields_value_display</h1>
<p>Location: <a href="http://wp-types.com/documentation/user-guides/types-filters/wpcf_fields_value_display/">http://wp-types.com/documentation/user-guides/types-filters/wpcf_fields_value_display/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_fields_value_display</b> filter is used to filter</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$classes</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing ... to be filtered.
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
<p></p>
<pre>[code type="php"]
function my_wpcf_fields_value_display($)
{
}
add_filter('wpcf_fields_value_display', 'my_wpcf_fields_value_display', 10, 1);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_fields_value_display is located in: embedded/frontend.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>

<a name="See_Also" id="See_Also"></a><h2>See Also</h2>
<ul>
    <li><a href="wpcf_fields_value_get.html">wpcf_fields_value_get</a></li>
    <li><a href="wpcf_fields_value_save.html">wpcf_fields_value_save</a></li>
</ul>
