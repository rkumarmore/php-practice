<section class="post-content single-post-content">
            <article>
               <div class="post-header-inner">
                  <h1 class="post-title">SOAP vs REST vs JSON - a 2020 comparison</h1>
                  
                     <span class="post-author">By Anna Monus | </span>
                     
                  <span class="post-date">Posted Feb 13, 2020</span>
                  <span class="reading-time"><span class="estimated-reading-time">| 12 min.</span> (<span class="word-count">2499</span> words)</span>
               </div>
               

<p>We are going to take a crack at solving the “SOAP vs REST vs JSON” dispute once and for all. You’re most likely aware of what those acronyms mean and what they have in common. But if you’re not, here it comes: they all have something to do with web services.</p>

<p>Web services are responsible for online machine-to-machine communication. Computers use them to communicate with each other over the internet. In fact, it’s only the front-end interfaces of websites and applications that reside on end user’s devices.</p>

<p>When it comes to the way you create web services, there are currently two main competing approaches: SOAP and REST. Due to the software industry being the way it is — i.e., loving to fight — , that has led to intense debates. “SOAP vs REST” is, in some ways, the new “tabs vs spaces”. Only this time, SOAP and REST aren’t even in the same category of things, as you’ll see in a while. To make things even more confusing, people often add yet more concepts to the mix, such as JSON.</p>

<p>Here are some quick links:</p>

<ol>
<li><a href="#differences">The main differences between SOAP and REST</a></li>
<li><a href="#stand">What does REST stand for?</a></li>
<li><a href="#reason">What’s the main reason to use REST?</a></li>
<li><a href="#restjson">REST and JSON</a></li>
<li><a href="#soapstand">What does SOAP stand for?</a></li>
<li><a href="#table">SOAP vs. REST comparison table</a></li>
<li><a href="#conclusion">Conclusion</a></li>
</ol>

<p>The related data is stored on a remote server and transmitted to the client machine through APIs that provide web services for third-party users. APIs can use different architectures to transfer data from the server to the client.</p>

<p>For a long time, SOAP was the go-to messaging protocol that almost every web service used. As these days developers need to build lightweight web and mobile applications, the more flexible REST architecture quickly gained popularity.</p>

<p>Currently, most public web services provided REST APIs and transfer data in the compact and easy-to-use JSON data-interchange format. However, enterprise users still frequently choose SOAP for their web services. The same will ring true going into the immediate future.
In this post, we’re going to clarify this whole situation. We’re going to explain the main differences between SOAP and REST, showing that despite having the same general goal, they differ profoundly in regard to the nature of what they are.</p>

<p>Then, we’ll get a little deeper into the characteristics of each web service approach. For each one of the styles, we’ll cover its definition and the motivations behind its use. You’ll also understand where JSON fits into this whole picture, and we’ll conclude that the “SOAP vs REST vs JSON” comparison doesn’t make a lot of sense to begin with.</p>

<p>Finally, we’ll see a detailed table comparing many different characteristics of the two approaches, so you can choose the best fit for your particular use case. With all of that in mind, let’s get started.</p>

<h2 id="differences">The main differences between SOAP and REST</h2>

<p>SOAP and REST both allow you to create your own API. API stands for Application Programming Interface. It makes it possible to transfer data from an application to other applications. An API receives requests and sends back responses through internet protocols such as HTTP, SMTP, and others.</p>

<p>Many popular websites provide public APIs for their users, for example, Google Maps has a <a href="https://developers.google.com/maps/documentation/javascript/tutorial" target="_blank">public REST API</a> that lets you customize Google Maps with your own content. There are also many APIs that have been created by companies for internal use.</p>

<p>SOAP and REST are two API styles that approach the question of data transmission from a different point of view.</p>

<blockquote>
<p>REST was created to address the problems of SOAP.</p>
</blockquote>

<p>SOAP is a standardized protocol that sends messages using other protocols such as HTTP and SMTP. The <a href="https://www.w3.org/TR/soap12/" target="_blank">SOAP specifications</a> are official web standards, maintained and developed by the World Wide Web Consortium (W3C). As opposed to SOAP, REST is not a protocol but an architectural style. The REST architecture lays down a set of guidelines you need to follow if you want to provide a RESTful web service, for example, stateless existence and the use of HTTP status codes.</p>

<p>As SOAP is an official protocol, it comes with strict rules and advanced security features such as built-in ACID compliance and authorization. Higher complexity, it requires more bandwidth and resources which can lead to slower page load times.</p>

<p>REST was created to address the problems of SOAP. Therefore it has a more flexible architecture. It consists of only loose guidelines and lets developers implement the recommendations in their own way. It allows different messaging formats, such as HTML, JSON, XML, and plain text, while SOAP only allows XML. REST is also a more lightweight architecture, so RESTful web services have a better performance. Because of that, it has become incredibly popular in the mobile era where even a few seconds matter a lot (both in page load time and revenue).</p>

<h2 id="stand">What does REST stand for?</h2>

<p>REST stands for Representational State Transfer. It’s an architectural style that defines a set of recommendations for designing loosely coupled applications that use the HTTP protocol for data transmission. REST doesn’t prescribe how to implement the principles at a lower level.</p>

<p>Instead, the REST guidelines allow developers to implement the details according to their own needs. Web services built following the REST architectural style are called RESTful web services.</p>

<p>To create a REST API, you need to follow six architectural constraints:</p>

<ol>
<li><strong>Uniform interface</strong> – Requests from different clients should look the same, for example, the same resource shouldn’t have more than one URI.</li>
<li><strong>Client-server separation</strong> – The client and the server should act independently. They should interact with each other only through requests and responses.</li>
<li><strong>Statelessness</strong> – There shouldn’t be any server-side sessions. Each request should contain all the information the server needs to know.</li>
<li><strong>Cacheable resources</strong> – Server responses should contain information about whether the data they send is cacheable or not. Cacheable resources should arrive with a version number so that the client can avoid requesting the same data more than once.</li>
<li><strong>Layered system</strong> – There might be several layers of servers between the client and the server that returns the response. This shouldn’t affect either the request or the response.</li>
<li><strong>Code on demand [optional]</strong> – When it’s necessary, the response can contain executable code (e.g., JavaScript within an HTML response) that the client can execute.</li>
</ol>

<h2 id="reason">What’s the main reason to use REST?</h2>

<p>Nowadays, REST is the most popular choice of developers to build public APIs. You can find many examples all over the internet, especially since all big social media sites provide REST APIs so that developers can seamlessly integrate their apps with the platform. These public APIs also come with detailed documentation where you can get all the information you need to pull data through the API.</p>

<p>For example, Twitter has a number of <a href="https://developer.twitter.com/en/docs.html" target="_blank">public REST APIs</a> that all serve different purposes, such as a Search API with which you can find historical tweets, a Direct Message API with which you can send personalized messages, and an Ad API with which you can programmatically manage your ad campaigns.</p>

<p>The <a href="https://developer.wordpress.org/rest-api/" target="_blank">WordPress REST API</a> is another popular example for REST APIs. It provides endpoints for WordPress data types so that you can interact remotely with the content of a WordPress site and achieve great things such as <a href="https://www.godaddy.com/garage/3-practical-use-cases-wp-rest-api/" target="_blank">building mobile apps with WordPress</a>.
<a href="https://nordicapis.com/rest-better-than-soap-yes-use-cases/" target="_blank">According to Nordic APIs</a>, REST is almost always better for web-based APIs, as it makes data available as resources (e.g. user) as opposed to services (e.g., <code>getUser</code>) which is how SOAP operates. Besides, REST inherits HTTP operations, meaning you can make simple API calls <a href="https://restfulapi.net/http-methods/" target="_blank">using the well-known HTTP verbs</a> like <code>GET</code>, <code>POST</code>, <code>PUT</code>, and <code>DELETE</code>.</p>

<h2 id="restjson">REST and JSON</h2>

<p>The REST architecture allows API providers to deliver data in multiple formats such as plain text, HTML, XML, YAML, and JSON, which is one of its most loved features. Thanks to the increasing popularity of REST, the lightweight and human-readable <a href="https://www.json.org/" target="_blank">JSON format</a> has also quickly gained traction, as it’s super suitable for quick and painless data exchange.</p>

<p>JSON stands for JavaScript Object Notation. It’s an easy-to-parse and lightweight data-interchange format. In spite of its name, JSON is completely language-agnostic, so it can be used with any programming language, not just JavaScript. Its syntax is a subset of the <a href="https://www.ecma-international.org/publications/files/ECMA-ST-ARCH/ECMA-262,%203rd%20edition,%20December%201999.pdf" target="_blank">Standard ECMA-262 3rd Edition</a>. JSON files consist of collections of name/value pairs and ordered lists of values that are universal data structures used by most programming languages. Therefore, JSON can be easily integrated with any language.</p>

<p>To see the difference between XML and JSON, here is an example code from the API docs of <a href="https://developer.atlassian.com/server/crowd/" target="_blank">Atlassian’s Crowd Server</a> that allows you to request and accept data in both XML and JSON formats:</p>

<div class="highlight"><pre style="color:#f8f8f2;background-color:#272822;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-xml" data-lang="xml"><span style="color:#75715e">&lt;?xml version="1.0" encoding="UTF-8"?&gt;</span>
<span style="color:#f92672">&lt;authentication-context&gt;</span>
  <span style="color:#f92672">&lt;username&gt;</span>my_username<span style="color:#f92672">&lt;/username&gt;</span>
  <span style="color:#f92672">&lt;password&gt;</span>my_password<span style="color:#f92672">&lt;/password&gt;</span>
  <span style="color:#f92672">&lt;validation-factors&gt;</span>
    <span style="color:#f92672">&lt;validation-factor&gt;</span>
      <span style="color:#f92672">&lt;name&gt;</span>remote_address<span style="color:#f92672">&lt;/name&gt;</span>
      <span style="color:#f92672">&lt;value&gt;</span>127.0.0.1<span style="color:#f92672">&lt;/value&gt;</span>
    <span style="color:#f92672">&lt;/validation-factor&gt;</span>
  <span style="color:#f92672">&lt;/validation-factors&gt;</span>
<span style="color:#f92672">&lt;/authentication-context&gt;</span></code></pre></div>

<h3 id="this-is-how-the-above-xml-code-looks-like-in-json">This is how the above XML code looks like in JSON:</h3>

<div class="highlight"><pre style="color:#f8f8f2;background-color:#272822;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-json" data-lang="json">{
   <span style="color:#f92672">"username"</span> : <span style="color:#e6db74">"my_username"</span>,
   <span style="color:#f92672">"password"</span> : <span style="color:#e6db74">"my_password"</span>,
   <span style="color:#f92672">"validation-factors"</span> : {
      <span style="color:#f92672">"validationFactors"</span> : [
         {
            <span style="color:#f92672">"name"</span> : <span style="color:#e6db74">"remote_address"</span>,
            <span style="color:#f92672">"value"</span> : <span style="color:#e6db74">"127.0.0.1"</span>
         }
      ]
   }
}</code></pre></div>

<p>As you can see, JSON is a more lightweight and less verbose format, and it’s easier to read and write as well. In most cases, it’s ideal for data interchange over the internet. However, XML still has <a href="https://www.cs.tufts.edu/comp/150IDS/final_papers/tstras01.1/FinalReport/FinalReport.html" target="_blank">some advantages</a>. For example, XML lets you place metadata within tags and also handles mixed content better—especially when mixed node arrays require detailed expressions.</p>

<h2 id="soapstand">What does SOAP stand for?</h2>

<p>SOAP stands for Simple Object Access Protocol. It’s a messaging protocol for interchanging data in a decentralized and distributed environment. SOAP can work with any application layer protocol, such as HTTP, SMTP, TCP, or UDP. It returns data to the receiver in XML format. Security, authorization, and error-handling are built into the protocol and, unlike REST, it doesn’t assume direct point-to-point communication. Therefore it performs well in a distributed enterprise environment.
SOAP follows a formal and standardized approach that specifies how to encode XML files returned by the API. A SOAP message is, in fact, an ordinary XML file that consists of the following parts:</p>

<ol>
<li><strong>Envelope</strong> (required) – This is the starting and ending tags of the message.</li>
<li><strong>Header</strong> (optional) – It contains the optional attributes of the message. It allows you to extend a SOAP message in a modular and decentralized way.</li>
<li><strong>Body</strong> (required) – It contains the XML data that the server transmits to the receiver.</li>
<li><strong>Fault</strong> (optional) – It carries information about errors occurring during processing the message.</li>
</ol>

<p>Here is how an ordinary SOAP message looks like. The example is from the W3C SOAP docs and it contains a SOAP envelope, a header block, and a body:</p>

<div class="highlight"><pre style="color:#f8f8f2;background-color:#272822;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-xml" data-lang="xml"><span style="color:#f92672">&lt;env:Envelope</span> <span style="color:#a6e22e">xmlns:env=</span><span style="color:#e6db74">"http://www.w3.org/2003/05/soap-envelope"</span><span style="color:#f92672">&gt;</span>
  <span style="color:#f92672">&lt;env:Header&gt;</span>
    <span style="color:#f92672">&lt;n:alertcontrol</span> <span style="color:#a6e22e">xmlns:n=</span><span style="color:#e6db74">"http://example.org/alertcontrol"</span><span style="color:#f92672">&gt;</span>
      <span style="color:#f92672">&lt;n:priority&gt;</span>1<span style="color:#f92672">&lt;/n:priority&gt;</span>
      <span style="color:#f92672">&lt;n:expires&gt;</span>2001-06-22T14:00:00-05:00<span style="color:#f92672">&lt;/n:expires&gt;</span>
    <span style="color:#f92672">&lt;/n:alertcontrol&gt;</span>
  <span style="color:#f92672">&lt;/env:Header&gt;</span>
  <span style="color:#f92672">&lt;env:Body&gt;</span>
    <span style="color:#f92672">&lt;m:alert</span> <span style="color:#a6e22e">xmlns:m=</span><span style="color:#e6db74">"http://example.org/alert"</span><span style="color:#f92672">&gt;</span>
      <span style="color:#f92672">&lt;m:msg&gt;</span>Pick up Mary at school at 2pm<span style="color:#f92672">&lt;/m:msg&gt;</span>
    <span style="color:#f92672">&lt;/m:alert&gt;</span>
  <span style="color:#f92672">&lt;/env:Body&gt;</span>
<span style="color:#f92672">&lt;/env:Envelope&gt;</span></code></pre></div>

<h2 id="what-s-the-main-reason-to-use-soap">What’s the main reason to use SOAP?</h2>

<p>In the short- to medium-term future, SOAP will likely continue to be used for enterprise-level web services that require high security and complex transactions. APIs for financial services, payment gateways, CRM software, identity management, and telecommunication services are commonly used examples of SOAP.</p>

<p>One of the most well known SOAP APIs is PayPal’s public API that allows you to accept PayPal and credit card payments, add a PayPal button to your website, let users log in with PayPal, and perform other PayPal-related actions.</p>

<p>Legacy system support is another frequent argument for using SOAP. Popular web services that have been around for a while might have many users who still connect to their services through their SOAP API which was the market leader before REST gained popularity. Salesforce, for example, provides both a SOAP and a REST API so that every developer can integrate Salesforce with their own platform in a way that suits them best.</p>

<blockquote>
<p>SOAP can be an excellent solution in situations where you can’t use REST.</p>
</blockquote>

<p>Besides, SOAP can be an excellent solution in situations where you can’t use REST. Although these days, most web service providers want to exchange stateless requests and responses, in some cases, you may need to process stateful operations. This happens in scenarios where you have to make a chain of operations act as one transaction—for instance, in the case of bank transfers.</p>

<p>Although SOAP APIs are stateless by default, SOAP does support stateful operations that can be implemented using the <a href="https://msdn.microsoft.com/en-us/library/ms951274.aspx" target="_blank">WS-* (Web Services) Specifications</a> that are built on top of the core XML and SOAP standards.</p>

<h2 id="table">SOAP vs. REST comparison table</h2>

<p>Although REST is very popular these days, SOAP still has its place in the world of web services. To help you choose between them, here’s a comparison table of SOAP and REST, that highlights the main differences between the two API styles:</p>

<table>
<thead>
<tr>
<th>&nbsp;</th>
<th>SOAP</th>
<th>REST</th>
</tr>
</thead>

<tbody>
<tr>
<td>Meaning</td>
<td>Simple Object Access Protocol</td>
<td>Representational State Transfer</td>
</tr>

<tr>
<td><strong>Design</strong></td>
<td><strong>Standardized protocol with pre-defined rules to follow.</strong></td>
<td><strong>Architectural style with loose guidelines and recommendations.</strong></td>
</tr>

<tr>
<td>Approach</td>
<td>Function-driven (data available as services, e.g.: “getUser”)</td>
<td>Data-driven (data available as resources, e.g. “user”).</td>
</tr>

<tr>
<td><strong>Statefulness</strong></td>
<td><strong>Stateless by default, but it’s possible to make a SOAP API stateful.</strong></td>
<td><strong>Stateless (no server-side sessions).</strong></td>
</tr>

<tr>
<td>Caching</td>
<td>API calls cannot be cached.</td>
<td>API calls can be cached.</td>
</tr>

<tr>
<td><strong>Security</strong></td>
<td><strong>WS-Security with SSL support. Built-in ACID compliance.</strong></td>
<td><strong>Supports HTTPS and SSL.</strong></td>
</tr>

<tr>
<td>Performance</td>
<td>Requires more bandwidth and computing power.</td>
<td>Requires fewer resources.</td>
</tr>

<tr>
<td><strong>Message format</strong></td>
<td><strong>Only XML.</strong></td>
<td><strong>Plain text, HTML, XML, JSON, YAML, and others.</strong></td>
</tr>

<tr>
<td>Transfer protocol(s)</td>
<td>HTTP, SMTP, UDP, and others.</td>
<td>Only HTTP</td>
</tr>

<tr>
<td><strong>Recommended for</strong></td>
<td><strong>Enterprise apps, high-security apps, distributed environment, financial services, payment gateways, telecommunication services.</strong></td>
<td><strong>Public APIs for web services, mobile services, social networks.</strong></td>
</tr>

<tr>
<td>Advantages</td>
<td>High security, standardized, extensibility.</td>
<td>Scalability, better performance, browser-friendliness, flexibility.</td>
</tr>

<tr>
<td><strong>Disadvantages</strong></td>
<td><strong>Poorer performance, more complexity, less flexibility.</strong></td>
<td><strong>Less security, not suitable for distributed environments.</strong></td>
</tr>
</tbody>
</table>

<h2 id="conclusion">There is a time for all approaches</h2>

<p>In today’s post, we’ve tried to solve the “SOAP vs REST vs JSON” dilemma. We’ve started covering the main differences between SOAP and rest, proceeding to cover each one of them in detail. After that, we defined each one of the web services styles, explaining the reasons behind its use. We’ve also covered JSON, explaining its role in the web services scenario.</p>

<p>By now you understand that both approaches have their advantages and disadvantages and that even though REST is the most popular style right now, that doesn’t mean everyone should discard SOAP immediately.</p>

<p>The nature of each one of the terms we’ve covered should also be clear to you now. SOAP and REST are approaches to developing web services, even though they are fundamentally different things underneath — the former is a formal protocol, while the latter is an architectural style. This difference in nature gives rise to many important practical differences, as you’ve just read.</p>

<p>Finally, we have JSON, which is neither a protocol nor an architectural style. Rather, JSON is a format, commonly associated with REST services, even though REST itself is format agnostic. That means that, while JSON is the most commonly used format, REST allows you to use XML, HTML, pure text, and even custom formats.</p>


            </article>          
         </section>