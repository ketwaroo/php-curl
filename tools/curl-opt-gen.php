<?php

require 'ruut.php';
require __DIR__ . '/vendor/autoload.php';

$xx = [
    'boolean'  => '<tbody class="tbody">
          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_AUTOREFERER</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to automatically set the <em>Referer:</em> field in
            requests where it follows a <em>Location:</em> redirect.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_BINARYTRANSFER</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to return the raw output when
            <strong><code>CURLOPT_RETURNTRANSFER</code></strong> is used.
           </td>
           <td style="vertical-align: top;">
            From PHP 5.1.3, this option has no effect: the raw output will
            always be returned when
            <strong><code>CURLOPT_RETURNTRANSFER</code></strong> is used.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_COOKIESESSION</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to mark this as a new cookie "session". It will force libcurl
            to ignore all cookies it is about to load that are "session cookies"
            from the previous session. By default, libcurl always stores and
            loads all cookies, independent if they are session cookies or not.
            Session cookies are cookies without expiry date and they are meant
            to be alive and existing for this "session" only.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_CERTINFO</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to output SSL certification information to <em>STDERR</em>
            on secure transfers.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.19.1. 
            Available since PHP 5.3.2. 
            Requires <strong><code>CURLOPT_VERBOSE</code></strong> to be on to have an effect.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_CONNECT_ONLY</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> tells the library to perform all the required proxy authentication 
            and connection setup, but no data transfer. This option is implemented for 
            HTTP, SMTP and POP3.
           </td>
           <td style="vertical-align: top;">
            Added in 7.15.2.
            Available since PHP 5.5.0.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_CRLF</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to convert Unix newlines to CRLF newlines
            on transfers.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_DNS_USE_GLOBAL_CACHE</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to use a global DNS cache. This option is
            not thread-safe and is enabled by default.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FAILONERROR</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to fail verbosely if the HTTP code returned
            is greater than or equal to 400. The default behavior is to return
            the page normally, ignoring the code.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSL_FALSESTART</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to enable TLS false start.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.42.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FILETIME</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to attempt to retrieve the modification
            date of the remote document. This value can be retrieved using
            the <code class="parameter">CURLINFO_FILETIME</code> option with
            <span class="function"><a href="function.curl-getinfo.php" class="function">curl_getinfo()</a></span>.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FOLLOWLOCATION</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to follow any
            <em>"Location: "</em> header that the server sends as
            part of the HTTP header (note this is recursive, PHP will follow as
            many <em>"Location: "</em> headers that it is sent,
            unless <strong><code>CURLOPT_MAXREDIRS</code></strong> is set).
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FORBID_REUSE</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to force the connection to explicitly
            close when it has finished processing, and not be pooled for reuse.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FRESH_CONNECT</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to force the use of a new connection
            instead of a cached one.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FTP_USE_EPRT</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to use EPRT (and LPRT) when doing active
            FTP downloads. Use <strong><code>FALSE</code></strong> to disable EPRT and LPRT and use PORT
            only.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FTP_USE_EPSV</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to first try an EPSV command for FTP
            transfers before reverting back to PASV. Set to <strong><code>FALSE</code></strong>
            to disable EPSV.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FTP_CREATE_MISSING_DIRS</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to create missing directories when an FTP operation
            encounters a path that currently doesn\'t exist.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FTPAPPEND</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to append to the remote file instead of
            overwriting it.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_TCP_NODELAY</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to disable TCP\'s Nagle algorithm, which tries to minimize
            the number of small packets on the network.
           </td>
           <td style="vertical-align: top;">
            Available since PHP 5.2.1 for versions compiled with libcurl 7.11.2 or
            greater.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FTPASCII</code></strong></td>
           <td style="vertical-align: top;">
            An alias of
            <strong><code>CURLOPT_TRANSFERTEXT</code></strong>. Use that instead.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FTPLISTONLY</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to only list the names of an FTP
            directory.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_HEADER</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to include the header in the output.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td><strong><code>CURLINFO_HEADER_OUT</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to track the handle\'s request string.
           </td>
           <td style="vertical-align: top;">
            Available since PHP 5.1.3. The <strong><code>CURLINFO_</code></strong>
            prefix is intentional.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_HTTPGET</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to reset the HTTP request method to GET.
            Since GET is the default, this is only necessary if the request
            method has been changed.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_HTTPPROXYTUNNEL</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to tunnel through a given HTTP proxy.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_MUTE</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to be completely silent with regards to
            the cURL functions.
           </td>
           <td style="vertical-align: top;">
            Removed in cURL 7.15.5 (You can use CURLOPT_RETURNTRANSFER instead)
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_NETRC</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to scan the <var class="filename">~/.netrc</var>
            file to find a username and password for the remote site that
            a connection is being established with.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_NOBODY</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to exclude the body from the output.
            Request method is then set to HEAD. Changing this to <strong><code>FALSE</code></strong> does
            not change it to GET.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_NOPROGRESS</code></strong></td>
           <td style="vertical-align: top;"><p class="para">
            <strong><code>TRUE</code></strong> to disable the progress meter for cURL transfers.
            </p><blockquote class="note"><p><strong class="note">Note</strong>: 
             </p><p class="para">
              PHP automatically sets this option to <strong><code>TRUE</code></strong>, this should only be
              changed for debugging purposes.
             </p>
            </blockquote>
            </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_NOSIGNAL</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to ignore any cURL function that causes a
            signal to be sent to the PHP process. This is turned on by default
            in multi-threaded SAPIs so timeout options can still be used.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.10.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PATH_AS_IS</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to not handle dot dot sequences.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.42.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PIPEWAIT</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to wait for pipelining/multiplexing.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.43.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_POST</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to do a regular HTTP POST. This POST is the
            normal <em>application/x-www-form-urlencoded</em> kind,
            most commonly used by HTML forms.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PUT</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to HTTP PUT a file. The file to PUT must
            be set with <strong><code>CURLOPT_INFILE</code></strong> and
            <strong><code>CURLOPT_INFILESIZE</code></strong>.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_RETURNTRANSFER</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to return the transfer as a string of the
            return value of <span class="function"><a href="function.curl-exec.php" class="function">curl_exec()</a></span> instead of outputting
            it out directly.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SAFE_UPLOAD</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to disable support for the <em>@</em> prefix for
            uploading files in <strong><code>CURLOPT_POSTFIELDS</code></strong>, which
            means that values starting with <em>@</em> can be safely
            passed as fields. <a href="class.curlfile.php" class="classname">CURLFile</a> may be used for
            uploads instead.
           </td>
           <td style="vertical-align: top;">
            Added in PHP 5.5.0 with <strong><code>FALSE</code></strong> as the default value. PHP 5.6.0
            changes the default value to <strong><code>TRUE</code></strong>.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SASL_IR</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to enable sending the initial response in the first packet.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.31.10. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSL_ENABLE_ALPN</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>FALSE</code></strong> to disable ALPN in the SSL handshake (if the SSL backend
            libcurl is built to use supports it), which can be used to
            negotiate http2.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.36.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSL_ENABLE_NPN</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>FALSE</code></strong> to disable NPN in the SSL handshake (if the SSL backend
            libcurl is built to use supports it), which can be used to
            negotiate http2.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.36.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSL_VERIFYPEER</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>FALSE</code></strong> to stop cURL from verifying the peer\'s
            certificate. Alternate certificates to verify against can be
            specified with the <strong><code>CURLOPT_CAINFO</code></strong> option
            or a certificate directory can be specified with the
            <strong><code>CURLOPT_CAPATH</code></strong> option.
           </td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> by default as of cURL 7.10. Default bundle installed as of
            cURL 7.10.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSL_VERIFYSTATUS</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to verify the certificate\'s status.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.41.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_TCP_FASTOPEN</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to enable TCP Fast Open.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.49.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_TFTP_NO_OPTIONS</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to not send TFTP options requests.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.48.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_TRANSFERTEXT</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to use ASCII mode for FTP transfers.
            For LDAP, it retrieves data in plain text instead of HTML. On
            Windows systems, it will not set <em>STDOUT</em> to binary
            mode.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_UNRESTRICTED_AUTH</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to keep sending the username and password
            when following locations (using
            <strong><code>CURLOPT_FOLLOWLOCATION</code></strong>), even when the
            hostname has changed.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_UPLOAD</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to prepare for an upload.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_VERBOSE</code></strong></td>
           <td style="vertical-align: top;">
            <strong><code>TRUE</code></strong> to output verbose information. Writes
            output to <em>STDERR</em>, or the file specified using
            <strong><code>CURLOPT_STDERR</code></strong>.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

         </tbody>',
    'int'      => '<tbody class="tbody">
          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_BUFFERSIZE</code></strong></td>
           <td style="vertical-align: top;">
            The size of the buffer to use for each read. There is no guarantee
            this request will be fulfilled, however.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.10.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_CLOSEPOLICY</code></strong></td>
           <td style="vertical-align: top;">
            One of the <strong><code>CURLCLOSEPOLICY_*</code></strong> values.
            <blockquote class="note"><p><strong class="note">Note</strong>: 
             </p><p class="para">
              This option is deprecated, as it was never implemented in cURL and
              never had any effect.
             </p>
            </blockquote>
           </td>
           <td style="vertical-align: top;">
            Removed in PHP 5.6.0.
           </td>
          </tr>

          <tr>
           <td><strong><code>CURLOPT_CONNECTTIMEOUT</code></strong></td>
           <td style="vertical-align: top;">
            The number of seconds to wait while trying to connect. Use 0 to
            wait indefinitely.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_CONNECTTIMEOUT_MS</code></strong></td>
           <td style="vertical-align: top;">
            The number of milliseconds to wait while trying to connect. Use 0 to
            wait indefinitely.
            
            If libcurl is built to use the standard system name resolver, that
            portion of the connect will still use full-second resolution for
            timeouts with a minimum timeout allowed of one second.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.16.2. Available since PHP 5.2.3.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_DNS_CACHE_TIMEOUT</code></strong></td>
           <td style="vertical-align: top;">
            The number of seconds to keep DNS entries in memory. This
            option is set to 120 (2 minutes) by default.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_EXPECT_100_TIMEOUT_MS</code></strong></td>
           <td style="vertical-align: top;">
            The timeout for Expect: 100-continue responses in milliseconds.
            Defaults to 1000 milliseconds.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.36.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FTPSSLAUTH</code></strong></td>
           <td style="vertical-align: top;">
            The FTP authentication method (when is activated):
            <em>CURLFTPAUTH_SSL</em> (try SSL first),
            <em>CURLFTPAUTH_TLS</em> (try TLS first), or
            <em>CURLFTPAUTH_DEFAULT</em> (let cURL decide).
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.12.2.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_HEADEROPT</code></strong></td>
           <td style="vertical-align: top;">
            How to deal with headers. One of the following constants:
            <span class="simpara">
             <strong><code>CURLHEADER_UNIFIED</code></strong>: the headers specified in
             <strong><code>CURLOPT_HTTPHEADER</code></strong> will be used in requests
             both to servers and proxies. With this option enabled, 
             <strong><code>CURLOPT_PROXYHEADER</code></strong> will not have any effect.
            </span>
            <span class="simpara">
             <strong><code>CURLHEADER_SEPARATE</code></strong>: makes
             <strong><code>CURLOPT_HTTPHEADER</code></strong> headers only get sent to
             a server and not to a proxy. Proxy headers must be set with
             <strong><code>CURLOPT_PROXYHEADER</code></strong> to get used. Note that if
             a non-CONNECT request is sent to a proxy, libcurl will send both
             server headers and proxy headers. When doing CONNECT, libcurl will
             send <strong><code>CURLOPT_PROXYHEADER</code></strong> headers only to the
             proxy and then <strong><code>CURLOPT_HTTPHEADER</code></strong> headers
             only to the server.
            </span>
            <span class="simpara">
             Defaults to <strong><code>CURLHEADER_SEPARATE</code></strong> as of cURL
             7.42.1, and <strong><code>CURLHEADER_UNIFIED</code></strong> before.
            </span>
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.37.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_HTTP_VERSION</code></strong></td>
           <td style="vertical-align: top;">
            <code class="parameter">CURL_HTTP_VERSION_NONE</code> (default, lets CURL
            decide which version to use),
            <code class="parameter">CURL_HTTP_VERSION_1_0</code> (forces HTTP/1.0),
            or <code class="parameter">CURL_HTTP_VERSION_1_1</code> (forces HTTP/1.1).
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_HTTPAUTH</code></strong></td>
           <td style="vertical-align: top;">
            <p class="para">
             The HTTP authentication method(s) to use. The options are:
             <code class="parameter">CURLAUTH_BASIC</code>,
             <code class="parameter">CURLAUTH_DIGEST</code>,
             <code class="parameter">CURLAUTH_GSSNEGOTIATE</code>,
             <code class="parameter">CURLAUTH_NTLM</code>,
             <code class="parameter">CURLAUTH_ANY</code>, and
             <code class="parameter">CURLAUTH_ANYSAFE</code>.
            </p>
            <p class="para">
             The bitwise <em>|</em> (or) operator can be used to combine
             more than one method. If this is done, cURL will poll the server to see
             what methods it supports and pick the best one.
            </p>
            <p class="para">
             <code class="parameter">CURLAUTH_ANY</code> is an alias for
             <em>CURLAUTH_BASIC | CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</em>.
            </p>
            <p class="para">
             <code class="parameter">CURLAUTH_ANYSAFE</code> is an alias for
             <em>CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</em>.
            </p>
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_INFILESIZE</code></strong></td>
           <td style="vertical-align: top;">
            The expected size, in bytes, of the file when uploading a file to
            a remote site. Note that using this option will not stop libcurl
            from sending more data, as exactly what is sent depends on
            <strong><code>CURLOPT_READFUNCTION</code></strong>.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_LOW_SPEED_LIMIT</code></strong></td>
           <td style="vertical-align: top;">
            The transfer speed, in bytes per second, that the transfer should be
            below during the count of <strong><code>CURLOPT_LOW_SPEED_TIME</code></strong>
            seconds before PHP considers the transfer too slow and aborts.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_LOW_SPEED_TIME</code></strong></td>
           <td style="vertical-align: top;">
            The number of seconds the transfer speed should be below
            <strong><code>CURLOPT_LOW_SPEED_LIMIT</code></strong> before PHP considers
            the transfer too slow and aborts.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_MAXCONNECTS</code></strong></td>
           <td style="vertical-align: top;">
            The maximum amount of persistent connections that are allowed.
            When the limit is reached,
            <strong><code>CURLOPT_CLOSEPOLICY</code></strong> is used to determine
            which connection to close.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_MAXREDIRS</code></strong></td>
           <td style="vertical-align: top;">
            The maximum amount of HTTP redirections to follow. Use this option
            alongside <strong><code>CURLOPT_FOLLOWLOCATION</code></strong>.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PORT</code></strong></td>
           <td style="vertical-align: top;">
            An alternative port number to connect to.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_POSTREDIR</code></strong></td>
           <td style="vertical-align: top;">
            A bitmask of 1 (301 Moved Permanently), 2 (302 Found)
            and 4 (303 See Other) if the HTTP POST method should be maintained
            when <strong><code>CURLOPT_FOLLOWLOCATION</code></strong> is set and a
            specific type of redirect occurs.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.19.1. Available since PHP 5.3.2.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PROTOCOLS</code></strong></td>
           <td style="vertical-align: top;">
            <p class="para">
             Bitmask of <strong><code>CURLPROTO_*</code></strong> values. If used, this bitmask 
             limits what protocols libcurl may use in the transfer. This allows you to have
             a libcurl built to support a wide range of protocols but still limit specific
             transfers to only be allowed to use a subset of them. By default libcurl will
             accept all protocols it supports. 
             See also <strong><code>CURLOPT_REDIR_PROTOCOLS</code></strong>.
            </p>
            <p class="para">
             Valid protocol options are: 
             <code class="parameter">CURLPROTO_HTTP</code>,
             <code class="parameter">CURLPROTO_HTTPS</code>,
             <code class="parameter">CURLPROTO_FTP</code>,
             <code class="parameter">CURLPROTO_FTPS</code>,
             <code class="parameter">CURLPROTO_SCP</code>,
             <code class="parameter">CURLPROTO_SFTP</code>,
             <code class="parameter">CURLPROTO_TELNET</code>,
             <code class="parameter">CURLPROTO_LDAP</code>,
             <code class="parameter">CURLPROTO_LDAPS</code>,
             <code class="parameter">CURLPROTO_DICT</code>,
             <code class="parameter">CURLPROTO_FILE</code>,
             <code class="parameter">CURLPROTO_TFTP</code>,
             <code class="parameter">CURLPROTO_ALL</code>
            </p>
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.19.4.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PROXYAUTH</code></strong></td>
           <td style="vertical-align: top;">
            The HTTP authentication method(s) to use for the proxy connection.
            Use the same bitmasks as described in
            <strong><code>CURLOPT_HTTPAUTH</code></strong>. For proxy authentication,
            only <code class="parameter">CURLAUTH_BASIC</code> and
            <code class="parameter">CURLAUTH_NTLM</code> are currently supported.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.10.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PROXYPORT</code></strong></td>
           <td style="vertical-align: top;">
            The port number of the proxy to connect to. This port number can
            also be set in <strong><code>CURLOPT_PROXY</code></strong>.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PROXYTYPE</code></strong></td>
           <td style="vertical-align: top;">
            Either <strong><code>CURLPROXY_HTTP</code></strong> (default),
            <strong><code>CURLPROXY_SOCKS4</code></strong>,
            <strong><code>CURLPROXY_SOCKS5</code></strong>,
            <strong><code>CURLPROXY_SOCKS4A</code></strong> or
            <strong><code>CURLPROXY_SOCKS5_HOSTNAME</code></strong>.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.10.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_REDIR_PROTOCOLS</code></strong></td>
           <td style="vertical-align: top;">
            Bitmask of <strong><code>CURLPROTO_*</code></strong> values. If used, this bitmask
            limits what protocols libcurl may use in a transfer that it follows to in
            a redirect when <strong><code>CURLOPT_FOLLOWLOCATION</code></strong> is enabled.
            This allows you to limit specific transfers to only be allowed to use a subset
            of protocols in redirections. By default libcurl will allow all protocols
            except for FILE and SCP. This is a difference compared to pre-7.19.4 versions
            which unconditionally would follow to all protocols supported. 
            See also <strong><code>CURLOPT_PROTOCOLS</code></strong> for protocol constant values.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.19.4.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_RESUME_FROM</code></strong></td>
           <td style="vertical-align: top;">
            The offset, in bytes, to resume a transfer from.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSL_OPTIONS</code></strong></td>
           <td style="vertical-align: top;">
            Set SSL behavior options, which is a bitmask of any of the following constants:
            <span class="simpara">
             <strong><code>CURLSSLOPT_ALLOW_BEAST</code></strong>: do not attempt to use
             any workarounds for a security flaw in the SSL3 and TLS1.0 protocols.
            </span>
            <span class="simpara">
             <strong><code>CURLSSLOPT_NO_REVOKE</code></strong>: disable certificate
             revocation checks for those SSL backends where such behavior is
             present.
            </span>
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.25.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSL_VERIFYHOST</code></strong></td>
           <td style="vertical-align: top;">
            1 to check the existence of a common name in the
            SSL peer certificate. 2 to check the existence of
            a common name and also verify that it matches the hostname
            provided. In production environments the value of this option
            should be kept at 2 (default value).
           </td>
           <td style="vertical-align: top;">
            Support for value 1 removed in cURL 7.28.1
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSLVERSION</code></strong></td>
           <td style="vertical-align: top;">
            One of <strong><code>CURL_SSLVERSION_DEFAULT</code></strong> (0),
            <strong><code>CURL_SSLVERSION_TLSv1</code></strong> (1),
            <strong><code>CURL_SSLVERSION_SSLv2</code></strong> (2),
            <strong><code>CURL_SSLVERSION_SSLv3</code></strong> (3),
            <strong><code>CURL_SSLVERSION_TLSv1_0</code></strong> (4),
            <strong><code>CURL_SSLVERSION_TLSv1_1</code></strong> (5) or
            <strong><code>CURL_SSLVERSION_TLSv1_2</code></strong> (6).
            <blockquote class="note"><p><strong class="note">Note</strong>: 
             </p><p class="para">
              Your best bet is to not set this and let it use the default.
              Setting it to 2 or 3 is very dangerous given the known
              vulnerabilities in SSLv2 and SSLv3.
             </p>
            </blockquote>
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_STREAM_WEIGHT</code></strong></td>
           <td style="vertical-align: top;">
            Set the numerical stream weight (a number between 1 and 256).
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.46.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_TIMECONDITION</code></strong></td>
           <td style="vertical-align: top;">
            How <strong><code>CURLOPT_TIMEVALUE</code></strong> is treated.
            Use <code class="parameter">CURL_TIMECOND_IFMODSINCE</code> to return the
            page only if it has been modified since the time specified in
            <strong><code>CURLOPT_TIMEVALUE</code></strong>. If it hasn\'t been modified,
            a <em>"304 Not Modified"</em> header will be returned
            assuming <strong><code>CURLOPT_HEADER</code></strong> is <strong><code>TRUE</code></strong>.
            Use <code class="parameter">CURL_TIMECOND_IFUNMODSINCE</code> for the reverse
            effect. <code class="parameter">CURL_TIMECOND_IFMODSINCE</code> is the
            default.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_TIMEOUT</code></strong></td>
           <td style="vertical-align: top;">
            The maximum number of seconds to allow cURL functions to execute.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_TIMEOUT_MS</code></strong></td>
           <td style="vertical-align: top;">
            The maximum number of milliseconds to allow cURL functions to
            execute.
            
            If libcurl is built to use the standard system name resolver, that
            portion of the connect will still use full-second resolution for
            timeouts with a minimum timeout allowed of one second.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.16.2. Available since PHP 5.2.3.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_TIMEVALUE</code></strong></td>
           <td style="vertical-align: top;">
            The time in seconds since January 1st, 1970. The time will be used
            by <strong><code>CURLOPT_TIMECONDITION</code></strong>. By default,
            <code class="parameter">CURL_TIMECOND_IFMODSINCE</code> is used.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_MAX_RECV_SPEED_LARGE</code></strong></td>
           <td style="vertical-align: top;">
            If a download exceeds this speed (counted in bytes per second) on
            cumulative average during the transfer, the transfer will pause to
            keep the average rate less than or equal to the parameter value.
            Defaults to unlimited speed.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.15.5. Available since PHP 5.4.0.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_MAX_SEND_SPEED_LARGE</code></strong></td>
           <td style="vertical-align: top;">
            If an upload exceeds this speed (counted in bytes per second) on
            cumulative average during the transfer, the transfer will pause to
            keep the average rate less than or equal to the parameter value.
            Defaults to unlimited speed.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.15.5. Available since PHP 5.4.0.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSH_AUTH_TYPES</code></strong></td>
           <td style="vertical-align: top;">
            A bitmask consisting of one or more of 
            <strong><code>CURLSSH_AUTH_PUBLICKEY</code></strong>, 
            <strong><code>CURLSSH_AUTH_PASSWORD</code></strong>, 
            <strong><code>CURLSSH_AUTH_HOST</code></strong>, 
            <strong><code>CURLSSH_AUTH_KEYBOARD</code></strong>. Set to 
            <strong><code>CURLSSH_AUTH_ANY</code></strong> to let libcurl pick one.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.16.1. 
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_IPRESOLVE</code></strong></td>
           <td style="vertical-align: top;">
            Allows an application to select what kind of IP addresses to use when
            resolving host names. This is only interesting when using host names that
            resolve addresses using more than one version of IP, possible values are
            <strong><code>CURL_IPRESOLVE_WHATEVER</code></strong>, 
            <strong><code>CURL_IPRESOLVE_V4</code></strong>, 
            <strong><code>CURL_IPRESOLVE_V6</code></strong>, by default
            <strong><code>CURL_IPRESOLVE_WHATEVER</code></strong>.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.10.8.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FTP_FILEMETHOD</code></strong></td>
           <td style="vertical-align: top;">
            Tell curl which method to use to reach a file on a FTP(S) server. Possible values are
            <strong><code>CURLFTPMETHOD_MULTICWD</code></strong>, 
            <strong><code>CURLFTPMETHOD_NOCWD</code></strong> and  
            <strong><code>CURLFTPMETHOD_SINGLECWD</code></strong>.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.15.1. Available since PHP 5.3.0.
           </td>
          </tr>

         </tbody>',
    'string'   => '<tbody class="tbody">
          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_CAINFO</code></strong></td>
           <td style="vertical-align: top;">
            The name of a file holding one or more certificates to verify the
            peer with. This only makes sense when used in combination with
            <strong><code>CURLOPT_SSL_VERIFYPEER</code></strong>.
           </td>
           <td style="vertical-align: top;">
            Might require an absolute path.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_CAPATH</code></strong></td>
           <td style="vertical-align: top;">
            A directory that holds multiple CA certificates. Use this option
            alongside <strong><code>CURLOPT_SSL_VERIFYPEER</code></strong>.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>
          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_COOKIE</code></strong></td>
           <td style="vertical-align: top;">
            The contents of the <em>"Cookie: "</em> header to be
            used in the HTTP request.
            Note that multiple cookies are separated with a semicolon followed
            by a space (e.g., "<em>fruit=apple; colour=red</em>")
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_COOKIEFILE</code></strong></td>
           <td style="vertical-align: top;">
            The name of the file containing the cookie data. The cookie file can
            be in Netscape format, or just plain HTTP-style headers dumped into
            a file.
            If the name is an empty string, no cookies are loaded, but cookie
            handling is still enabled.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_COOKIEJAR</code></strong></td>
           <td style="vertical-align: top;">
            The name of a file to save all internal cookies to when the handle is closed, 
            e.g. after a call to curl_close.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_CUSTOMREQUEST</code></strong></td>
           <td style="vertical-align: top;"><p class="para">
            A custom request method to use instead of
            <em>"GET"</em> or <em>"HEAD"</em> when doing
            a HTTP request. This is useful for doing
            <em>"DELETE"</em> or other, more obscure HTTP requests.
            Valid values are things like <em>"GET"</em>,
            <em>"POST"</em>, <em>"CONNECT"</em> and so on;
            i.e. Do not enter a whole HTTP request line here. For instance,
            entering <em>"GET /index.html HTTP/1.0\r\n\r\n"</em>
            would be incorrect.
            </p><blockquote class="note"><p><strong class="note">Note</strong>: 
             </p><p class="para">
              Don\'t do this without making sure the server supports the custom
              request method first.
             </p>
            </blockquote>
            </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_DEFAULT_PROTOCOL</code></strong></td>
           <td style="vertical-align: top;"><p class="para">
            The default protocol to use if the URL is missing a scheme name.
           </p></td>
           <td style="vertical-align: top;">
            Added in cURL 7.45.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_DNS_INTERFACE</code></strong></td>
           <td style="vertical-align: top;"><p class="para">
            Set the name of the network interface that the DNS resolver should bind to.
            This must be an interface name (not an address).
            </p></td>
           <td style="vertical-align: top;">
            Added in cURL 7.33.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_DNS_LOCAL_IP4</code></strong></td>
           <td style="vertical-align: top;"><p class="para">
            Set the local IPv4 address that the resolver should bind to. The argument
            should contain a single numerical IPv4 address as a string.
            </p></td>
           <td style="vertical-align: top;">
            Added in cURL 7.33.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_DNS_LOCAL_IP6</code></strong></td>
           <td style="vertical-align: top;"><p class="para">
            Set the local IPv6 address that the resolver should bind to. The argument
            should contain a single numerical IPv6 address as a string.
            </p></td>
           <td style="vertical-align: top;">
            Added in cURL 7.33.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_EGDSOCKET</code></strong></td>
           <td style="vertical-align: top;">
            Like <strong><code>CURLOPT_RANDOM_FILE</code></strong>, except a filename
            to an Entropy Gathering Daemon socket.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_ENCODING</code></strong></td>
           <td style="vertical-align: top;">
            The contents of the <em>"Accept-Encoding: "</em> header.
            This enables decoding of the response. Supported encodings are
            <em>"identity"</em>, <em>"deflate"</em>, and
            <em>"gzip"</em>. If an empty string, <em>""</em>,
            is set, a header containing all supported encoding types is sent.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.10.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FTPPORT</code></strong></td>
           <td style="vertical-align: top;">
            The value which will be used to get the IP address to use
            for the FTP "PORT" instruction. The "PORT" instruction tells
            the remote server to connect to our specified IP address.  The
            string may be a plain IP address, a hostname, a network
            interface name (under Unix), or just a plain \' - \' to use the
            systems default IP address.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_INTERFACE</code></strong></td>
           <td style="vertical-align: top;">
            The name of the outgoing network interface to use. This can be an
            interface name, an IP address or a host name.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_KEYPASSWD</code></strong></td>
           <td style="vertical-align: top;">
            The password required to use the <strong><code>CURLOPT_SSLKEY</code></strong> 
            or <strong><code>CURLOPT_SSH_PRIVATE_KEYFILE</code></strong> private key. 
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.16.1. 
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_KRB4LEVEL</code></strong></td>
           <td style="vertical-align: top;">
            The KRB4 (Kerberos 4) security level. Any of the following values
            (in order from least to most powerful) are valid:
            <em>"clear"</em>,
            <em>"safe"</em>,
            <em>"confidential"</em>,
            <em>"private".</em>.
            If the string does not match one of these,
            <em>"private"</em> is used. Setting this option to <strong><code>NULL</code></strong>
            will disable KRB4 security. Currently KRB4 security only works
            with FTP transactions.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_LOGIN_OPTIONS</code></strong></td>
           <td style="vertical-align: top;">
            Can be used to set protocol specific login options, such as the
            preferred authentication mechanism via "AUTH=NTLM" or "AUTH=*",
            and should be used in conjunction with the
            <strong><code>CURLOPT_USERNAME</code></strong> option.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.34.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PINNEDPUBLICKEY</code></strong></td>
           <td style="vertical-align: top;">
             Set the pinned public key.
             The string can be the file name of your pinned public key. The file
             format expected is "PEM" or "DER". The string can also be any
             number of base64 encoded sha256 hashes preceded by "sha256//" and
             separated by ";".
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.39.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_POSTFIELDS</code></strong></td>
           <td style="vertical-align: top;">
            <span class="simpara">
             The full data to post in a HTTP "POST" operation.
             To post a file, prepend a filename with <em>@</em> and
             use the full path. The filetype can be explicitly specified by
             following the filename with the type in the format
             \'<em>;type=mimetype</em>\'. This parameter can either be
             passed as a urlencoded string like \'<em>para1=val1&amp;para2=val2&amp;...</em>\' 
             or as an array with the field name as key and field data as value.
             If <code class="parameter">value</code> is an array, the
             <em>Content-Type</em> header will be set to
             <em>multipart/form-data</em>.
            </span>
            <span class="simpara">
             As of PHP 5.2.0, <code class="parameter">value</code> must be an array if
             files are passed to this option with the <em>@</em> prefix.
            </span>
            <span class="simpara">
             As of PHP 5.5.0, the <em>@</em> prefix is deprecated and
             files can be sent using <a href="class.curlfile.php" class="classname">CURLFile</a>. The 
             <em>@</em> prefix can be disabled for safe passing of
             values beginning with <em>@</em> by setting the 
             <strong><code>CURLOPT_SAFE_UPLOAD</code></strong> option to <strong><code>TRUE</code></strong>.
            </span>
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PRIVATE</code></strong></td>
           <td style="vertical-align: top;">
            Any data that should be associated with this cURL handle. This data
            can subsequently be retrieved with the
            <strong><code>CURLINFO_PRIVATE</code></strong> option of
            <span class="function"><a href="function.curl-getinfo.php" class="function">curl_getinfo()</a></span>. cURL does nothing with this data.
            When using a cURL multi handle, this private data is typically a
            unique key to identify a standard cURL handle.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.10.3. 
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PROXY</code></strong></td>
           <td style="vertical-align: top;">
            The HTTP proxy to tunnel requests through.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PROXY_SERVICE_NAME</code></strong></td>
           <td style="vertical-align: top;">
            The proxy authentication service name.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.34.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PROXYUSERPWD</code></strong></td>
           <td style="vertical-align: top;">
            A username and password formatted as
            <em>"[username]:[password]"</em> to use for the
            connection to the proxy.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_RANDOM_FILE</code></strong></td>
           <td style="vertical-align: top;">
            A filename to be used to seed the random number generator for SSL.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_RANGE</code></strong></td>
           <td style="vertical-align: top;">
            Range(s) of data to retrieve in the format
            <em>"X-Y"</em> where X or Y are optional. HTTP transfers
            also support several intervals, separated with commas in the format
            <em>"X-Y,N-M"</em>.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_REFERER</code></strong></td>
           <td style="vertical-align: top;">
            The contents of the <em>"Referer: "</em> header to be used
            in a HTTP request.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SERVICE_NAME</code></strong></td>
           <td style="vertical-align: top;">
            The authentication service name.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.43.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSH_HOST_PUBLIC_KEY_MD5</code></strong></td>
           <td style="vertical-align: top;">
            A string containing 32 hexadecimal digits. The string should be the 
            MD5 checksum of the remote host\'s public key, and libcurl will reject 
            the connection to the host unless the md5sums match. 
            This option is only for SCP and SFTP transfers.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.17.1. 
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSH_PUBLIC_KEYFILE</code></strong></td>
           <td style="vertical-align: top;">
            The file name for your public key. If not used, libcurl defaults to 
            $HOME/.ssh/id_dsa.pub if the HOME environment variable is set, 
            and just "id_dsa.pub" in the current directory if HOME is not set.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.16.1. 
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSH_PRIVATE_KEYFILE</code></strong></td>
           <td style="vertical-align: top;">
            The file name for your private key. If not used, libcurl defaults to 
            $HOME/.ssh/id_dsa if the HOME environment variable is set, 
            and just "id_dsa" in the current directory if HOME is not set. 
            If the file is password-protected, set the password with 
            <strong><code>CURLOPT_KEYPASSWD</code></strong>.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.16.1. 
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSL_CIPHER_LIST</code></strong></td>
           <td style="vertical-align: top;">
            A list of ciphers to use for SSL. For example,
            <em>RC4-SHA</em> and <em>TLSv1</em> are valid
            cipher lists.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSLCERT</code></strong></td>
           <td style="vertical-align: top;">
            The name of a file containing a PEM formatted certificate.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSLCERTPASSWD</code></strong></td>
           <td style="vertical-align: top;">
            The password required to use the
            <strong><code>CURLOPT_SSLCERT</code></strong> certificate.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSLCERTTYPE</code></strong></td>
           <td style="vertical-align: top;">
            The format of the certificate. Supported formats are
            <em>"PEM"</em> (default), <em>"DER"</em>,
            and <em>"ENG"</em>.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.9.3.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSLENGINE</code></strong></td>
           <td style="vertical-align: top;">
            The identifier for the crypto engine of the private SSL key
            specified in <strong><code>CURLOPT_SSLKEY</code></strong>.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSLENGINE_DEFAULT</code></strong></td>
           <td style="vertical-align: top;">
            The identifier for the crypto engine used for asymmetric crypto
            operations.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSLKEY</code></strong></td>
           <td style="vertical-align: top;">
            The name of a file containing a private SSL key.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSLKEYPASSWD</code></strong></td>
           <td style="vertical-align: top;"><p class="para">
            The secret password needed to use the private SSL key specified in
            <strong><code>CURLOPT_SSLKEY</code></strong>.
            </p><blockquote class="note"><p><strong class="note">Note</strong>: 
             </p><p class="para">
              Since this option contains a sensitive password, remember to keep
              the PHP script it is contained within safe.
             </p>
            </blockquote>
            </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SSLKEYTYPE</code></strong></td>
           <td style="vertical-align: top;">
            The key type of the private SSL key specified in
            <strong><code>CURLOPT_SSLKEY</code></strong>. Supported key types are
            <em>"PEM"</em> (default), <em>"DER"</em>,
            and <em>"ENG"</em>.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_UNIX_SOCKET_PATH</code></strong></td>
           <td style="vertical-align: top;">
            Enables the use of Unix domain sockets as connection endpoint and
            sets the path to the given <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.40.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_URL</code></strong></td>
           <td style="vertical-align: top;">
            The URL to fetch. This can also be set when initializing a
            session with <span class="function"><a href="function.curl-init.php" class="function">curl_init()</a></span>.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_USERAGENT</code></strong></td>
           <td style="vertical-align: top;">
            The contents of the <em>"User-Agent: "</em> header to be
            used in a HTTP request.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_USERNAME</code></strong></td>
           <td style="vertical-align: top;">
            The user name to use in authentication.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.19.1. Available since PHP 5.5.0.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_USERPWD</code></strong></td>
           <td style="vertical-align: top;">
            A username and password formatted as
            <em>"[username]:[password]"</em> to use for the
            connection.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_XOAUTH2_BEARER</code></strong></td>
           <td style="vertical-align: top;">
            Specifies the OAuth 2.0 access token.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.33.0. Available since PHP 7.0.7.
           </td>
          </tr>

         </tbody>',
    'array'    => '
        <tbody class="tbody">
          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_CONNECT_TO</code></strong></td>
           <td style="vertical-align: top;">
            Connect to a specific host and port instead of the URL\'s host and port.
            Accepts an array of strings with the format
            <em>HOST:PORT:CONNECT-TO-HOST:CONNECT-TO-PORT</em>.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.49.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_HTTP200ALIASES</code></strong></td>
           <td style="vertical-align: top;">
            An array of HTTP 200 responses that will be treated as valid
            responses and not as errors.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.10.3.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_HTTPHEADER</code></strong></td>
           <td style="vertical-align: top;">
            An array of HTTP header fields to set, in the format
            <code class="code">
             array(\'Content-type: text/plain\', \'Content-length: 100\')
            </code>
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_POSTQUOTE</code></strong></td>
           <td style="vertical-align: top;">
            An array of FTP commands to execute on the server after the FTP
            request has been performed.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PROXYHEADER</code></strong></td>
           <td style="vertical-align: top;">
            An array of custom HTTP headers to pass to proxies.
           </td>
           <td style="vertical-align: top;">
            Added in cURL 7.37.0. Available since PHP 7.0.7.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_QUOTE</code></strong></td>
           <td style="vertical-align: top;">
            An array of FTP commands to execute on the server prior to the FTP
            request.
           </td>
           <td style="vertical-align: top;">
           </td>
          </tr>

         </tbody>',
    'resource' => '<tbody class="tbody">
          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_FILE</code></strong></td>
           <td style="vertical-align: top;">
            The file that the transfer should be written to. The default
            is <em>STDOUT</em> (the browser window).
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_INFILE</code></strong></td>
           <td style="vertical-align: top;">
            The file that the transfer should be read from when uploading.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_STDERR</code></strong></td>
           <td style="vertical-align: top;">
            An alternative location to output errors to instead of
            <em>STDERR</em>.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_WRITEHEADER</code></strong></td>
           <td style="vertical-align: top;">
            The file that the header part of the transfer is written to.
           </td>
          </tr>

         </tbody>',
    'closure'  => '<tbody class="tbody">
          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_HEADERFUNCTION</code></strong></td>
           <td style="vertical-align: top;">
            A callback accepting two parameters.
            The first is the cURL resource, the second is a
            string with the header data to be written. The header data must
            be written by this callback. Return the number of 
            bytes written.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PASSWDFUNCTION</code></strong></td>
           <td style="vertical-align: top;">
            A callback accepting three parameters. 
            The first is the cURL resource, the second is a
            string containing a password prompt, and the third is the maximum
            password length. Return the string containing the password.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_PROGRESSFUNCTION</code></strong></td>
           <td style="vertical-align: top;">
            <p class="para">
             A callback accepting five parameters.
             The first is the cURL resource, the second is the total number of
             bytes expected to be downloaded in this transfer, the third is
             the number of bytes downloaded so far, the fourth is the total
             number of bytes expected to be uploaded in this transfer, and the
             fifth is the number of bytes uploaded so far.
            </p>
            <blockquote class="note"><p><strong class="note">Note</strong>: 
             </p><p class="para">
              The callback is only called when the <strong><code>CURLOPT_NOPROGRESS</code></strong>
              option is set to <strong><code>FALSE</code></strong>.
             </p>
            </blockquote>
            <p class="para">
             Return a non-zero value to abort the transfer. In which case, the
             transfer will set a <strong><code>CURLE_ABORTED_BY_CALLBACK</code></strong>
             error.
            </p>
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_READFUNCTION</code></strong></td>
           <td style="vertical-align: top;">
            A callback accepting three parameters. 
            The first is the cURL resource, the second is a
            stream resource provided to cURL through the option
            <strong><code>CURLOPT_INFILE</code></strong>, and the third is the maximum
            amount of data to be read. The callback must return a string
            with a length equal or smaller than the amount of data requested,
            typically by reading it from the passed stream resource. It should
            return an empty string to signal <em>EOF</em>.
           </td>
          </tr>

          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_WRITEFUNCTION</code></strong></td>
           <td style="vertical-align: top;">
            A callback accepting two parameters. 
            The first is the cURL resource, and the second is a
            string with the data to be written. The data must be saved by
            this callback. It must return the exact number of bytes written 
            or the transfer will be aborted with an error.
           </td>
          </tr>

         </tbody>',
    'mixed'    => '<tbody class="tbody">
          <tr>
           <td style="vertical-align: top;"><strong><code>CURLOPT_SHARE</code></strong></td>
           <td style="vertical-align: top;">
            A result of <span class="function"><a href="function.curl-share-init.php" class="function">curl_share_init()</a></span>. Makes the cURL
            handle to use the data from the shared handle.
           </td>
          </tr>

         </tbody>',
];

$out = [];
foreach ($xx as $p => $x)
{

    $xm = new SimpleDOM($x);

    foreach ($xm->tr as $tr)
    {

        $tmp = [];
        /* @var $tr SimpleDOM */

        $name = trim(strip_tags($tr->td[0]->innerHTML()));

        $fnName   = \Ketwaroo\Text::toStudlyCaps(str_replace(['CURLOPT_'], '', $name));
        $docblock = (wordwrap(trim(preg_replace('~[ \t\r\n]+~', ' ', $tr->td[1]->innerHTML())), 75, PHP_EOL . ' * ', FALSE));
        if (isset($tr->td[2])) $since    = (trim(preg_replace('~[ \t\r\n]+~', ' ', $tr->td[2]->innerHTML())));
        else
        {
            $since = '';
        }

        $out[] = ' /**';
        $out[] = " * {$name}";
        $out[] = " * {$docblock}";
        $out[] = " * ";
        $out[] = " * @param {$p} \${$p} {$name}";
        if (!empty($since))
        {
            $out[] = " * @since {$since}";
        }
        $out[] = " * @return static";
        $out[] = " */";
        $out[] = "public function set{$fnName}(\${$p}, \$type='{$p}'){return \$this->setOption('{$name}',\${$p},\$type);}";
        $out[] = "";
        
        $out[] = ' /**';
        $out[] = " * {$name}";
        $out[] = " * ";
        $out[] = " * @return {$p} {$name}";
        $out[] = " */";
        $out[] = "public function get{$fnName}(\${$p}){return \$this->getOption('{$name}');}";
        $out[] = "";
        
        $out[] = ' /**';
        $out[] = " * {$name}";
        $out[] = " * ";
        $out[] = " * @return static";
        $out[] = " */";
        $out[] = "public function clear{$fnName}(\${$p}){return \$this->clearOption('{$name}');}";
        $out[] = "";
    }
}

echo implode(PHP_EOL, $out);

