<h1>Title: wpcf_field_image_max_width</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_field_image_max_width.php">http://iworks.pl/types/filters/wpcf_field_image_max_width/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_field_image_max_width</b> filter is used to filter default
width of imagees from custom field displayed on admin entries list.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$var</tt></dt>
    <dd>(<i>string</i>) width of image.
    <dl>
        <dd>Default: <i>100px</i></dd>
    </dl>
    </dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p></p>
<pre>[code type="php"]
function my_wpcf_field_image_max_width($)
{
    return '50px';
}
add_filter('wpcf_field_image_max_width', 'my_wpcf_field_image_max_width', 10, 1);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_field_image_max_width is located in: types/embedded/classes/class.wpcf-post-types.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: unknown</p>
