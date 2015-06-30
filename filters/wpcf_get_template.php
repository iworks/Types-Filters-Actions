<h1>Title: wpcf_get_template</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_get_template.php">http://iworks.pl/types/filters/wpcf_get_template/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_get_template</b> filter is used to change the output of a modal window of
the inserted Types field when editing a post. It allows changing the content of the settings
screen.</p> <img src="images/wpcf_get_template.editor-modal-numeric.png"
alt=""
width="400" >
<p>Default template directory is located in:
<pre>embedded/views/templates</pre></p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$template</tt></dt>
    <dd>(<i>string</i>) (<i>required</i>) Existing modal window html to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$config</tt></dt>
    <dd>(<i>array</i>) additional configuration of field.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(string)</tt></dt>
    <dd>Output of modal window.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>Remove the ability to change the output format of the inserted Types field for users that don't have administrator privileges to change options.</p>
<pre>[code type="php"]
function my_wpcf_get_template($template, $config)
{
    if (current_user_can('manage_options')) {
        return $template;
    }
    /**
     * find id="numeric-format" and add readonly
     */
    return preg_replace(
        '/ id="numeric-format" /',
        "$1 readonly=\"readonly\"",
        $template
    );
}
add_filter('wpcf_get_template', 'my_wpcf_get_template', 10, 2);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_get_template is located in: embedded/classes/loader.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.2</p>
