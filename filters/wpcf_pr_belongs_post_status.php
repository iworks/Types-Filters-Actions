<h1>Title: wpcf_pr_belongs_post_status</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_pr_belongs_post_status.php">http://iworks.pl/types/filters/wpcf_pr_belongs_post_status/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_pr_belongs_post_status</b> filter is used to filter</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$classes</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing ... to be filtered.
    <dl>
        <dd>Default: <i>array</i> array( 'publish', 'draft' )</dd>
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
add_filter('wpcf_pr_belongs_post_status', 'my_wpcf_pr_belongs_post_status');
function my_wpcf_pr_belongs_post_status($statuses)
{
     $statuses[] = 'future';
     return $statuses;
}
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_pr_belongs_post_status is located in: embedded/includes/post-relationship.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.6.0</p>
