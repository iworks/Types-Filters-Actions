<h1>Title: wpt_field_options</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpt_field_options.php">http://iworks.pl/types/filters/wpt_field_options.php</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpt_field_options</b> filter is used to filter options array for
select or radio type field.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$classes</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing options to be filtered. It
    could be a empty array.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(array)</tt></dt>
    <dd>Array of options.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p></p>
<pre>[code type="php"]
function my_wpt_field_options( $options, $title, $type )
{
    switch( $title )
    {
    case 'a name of select field':
        $options[] = array(
            '#value' =&gt; 'xxx',
            '#title' =&gt; 'dynamic add some option',
        );
        break;
    case 'a name of radio option':
        $options[] = array (
            '#value' =&gt; 'xxx',
            '#title' =&gt; 'dynamic added radio',
            '#validate' =&gt; array (),
            '#after' =&gt; '',

        );
        break;
    }
    return $options;
}
add_filter('wpt_field_options', 'my_wpt_field_options', 10, 3);
[/code]</pre>m

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpt_field_options is located in: embedded/includes/custom-types.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.6.3</p>
