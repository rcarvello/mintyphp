<h1>Router</h1>
<p>The instance is stored in the global "Router" class.</p>
<h2>Redirect</h2>
<pre>Router::addRoute($request, $location)</pre>
<p>This should be called from the router configuration (in "config/router.php"). Typically this is used to route
the empty requested URL "/" to a specific location. It does not update the URL in the address bar. If you do want
to update the URL in the address bar you should use the "redirect" function.</p>
<h2>Request</h2>
<pre>Router::getRequest()</pre>
<p>With this call you can read the requested URL. Normally this is the same as "$_SERVER['REQUEST_URI']".</p>
<h2>URL</h2>
<pre>Router::getUrl()</pre>
<p>With this call you can find the effective routed URL. This does not contain parameters and/or trailing slashes.
It does also show the redirected target, not the entered URL.</p>
<h2>View</h2>
<pre>Router::getView()</pre>
<p>This gets the path to the view file that is loaded. For example on this page it returns: <?php var_dump(Router::getView()); ?>.
<h2>Action</h2>
<pre>Router::getAction()</pre>
<p>This gets the path to the action file that is loaded. For example on this page it returns: <?php var_dump(Router::getAction()); ?>.
<h2>Template</h2>
<pre>Router::getTemplate()</pre>
<p>This gets the path to the template file that is loaded. For example on this page it returns: <?php var_dump(Router::getTemplate()); ?>.
<h2>Parameters</h2>
<pre>Router::getParameters()</pre>
<p>This gets the parameters effective parameters. See also the "parameterless" function below.</p>
<h2>Redirect</h2>
<pre>Router::redirect($url)</pre>
<p>This "redirect" function redirects directly to another URL.</p>
<h2>Parameterless</h2>
<pre>Router::parameterless()</pre>
<p>By putting "&lt;?php Router::parameterless() ?&gt;" in the first line of the action you can force a redirect to the parameterless variant
of the page.</p>