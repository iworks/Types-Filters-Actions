<h1>Title: wpcf_capability</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_capability.php">http://iworks.pl/types/filters/wpcf_capability/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_capability</b> filter is used to filter capability level.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$capability</tt> </dt>
    <dd> (<i>string</i>) (<i>required</i>) Existing capability to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2> Return Values</h2>
<dl>
    <dt><tt>(string)</tt></dt>
    <dd>New capability</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>To allow the use of the Types plugin by the user role "editor" we must change capability to "publish_pages".</p>

<pre>[code type="php"]
function my_wpcf_capability($capability)
{
    return 'publish_pages';
}
add_filter('wpcf_capability', 'my_wpcf_capability', 10, 1);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>

wpcf_capability is located in: admin.php

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.6</p>
