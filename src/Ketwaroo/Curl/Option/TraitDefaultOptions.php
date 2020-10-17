<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ketwaroo\Curl\Option;

/**
 * Description of TraitDefaultOptions
 *
 * @author Yaasir Ketwaroo<ketwaroo.yaasir@gmail.com>
 */
trait TraitDefaultOptions
{

    /**
     * CURLOPT_AUTOREFERER
     * <strong><code>TRUE</code></strong> to automatically set the
     * <em>Referer:</em> field in requests where it follows a <em>Location:</em>
     * redirect.
     * 
     * @param boolean $boolean CURLOPT_AUTOREFERER
     * @return static
     */
    public function setAutoreferer($boolean)
    {
        return $this->setOption('CURLOPT_AUTOREFERER', $boolean, 'boolean');
    }

    /**
     * CURLOPT_AUTOREFERER
     * 
     * @return boolean CURLOPT_AUTOREFERER
     */
    public function getAutoreferer($boolean)
    {
        return $this->getOption('CURLOPT_AUTOREFERER');
    }

    /**
     * CURLOPT_AUTOREFERER
     * 
     * @return static
     */
    public function clearAutoreferer($boolean)
    {
        return $this->clearOption('CURLOPT_AUTOREFERER');
    }

    /**
     * CURLOPT_BINARYTRANSFER
     * <strong><code>TRUE</code></strong> to return the raw output when
     * <strong><code>CURLOPT_RETURNTRANSFER</code></strong> is used.
     * 
     * @param boolean $boolean CURLOPT_BINARYTRANSFER
     * @since From PHP 5.1.3, this option has no effect: the raw output will always be returned when <strong><code>CURLOPT_RETURNTRANSFER</code></strong> is used.
     * @return static
     */
    public function setBinarytransfer($boolean)
    {
        return $this->setOption('CURLOPT_BINARYTRANSFER', $boolean, 'boolean');
    }

    /**
     * CURLOPT_BINARYTRANSFER
     * 
     * @return boolean CURLOPT_BINARYTRANSFER
     */
    public function getBinarytransfer($boolean)
    {
        return $this->getOption('CURLOPT_BINARYTRANSFER');
    }

    /**
     * CURLOPT_BINARYTRANSFER
     * 
     * @return static
     */
    public function clearBinarytransfer($boolean)
    {
        return $this->clearOption('CURLOPT_BINARYTRANSFER');
    }

    /**
     * CURLOPT_COOKIESESSION
     * <strong><code>TRUE</code></strong> to mark this as a new cookie "session".
     * It will force libcurl to ignore all cookies it is about to load that are
     * "session cookies" from the previous session. By default, libcurl always
     * stores and loads all cookies, independent if they are session cookies or
     * not. Session cookies are cookies without expiry date and they are meant to
     * be alive and existing for this "session" only.
     * 
     * @param boolean $boolean CURLOPT_COOKIESESSION
     * @return static
     */
    public function setCookiesession($boolean)
    {
        return $this->setOption('CURLOPT_COOKIESESSION', $boolean, 'boolean');
    }

    /**
     * CURLOPT_COOKIESESSION
     * 
     * @return boolean CURLOPT_COOKIESESSION
     */
    public function getCookiesession($boolean)
    {
        return $this->getOption('CURLOPT_COOKIESESSION');
    }

    /**
     * CURLOPT_COOKIESESSION
     * 
     * @return static
     */
    public function clearCookiesession($boolean)
    {
        return $this->clearOption('CURLOPT_COOKIESESSION');
    }

    /**
     * CURLOPT_CERTINFO
     * <strong><code>TRUE</code></strong> to output SSL certification information
     * to <em>STDERR</em> on secure transfers.
     * 
     * @param boolean $boolean CURLOPT_CERTINFO
     * @since Added in cURL 7.19.1. Available since PHP 5.3.2. Requires <strong><code>CURLOPT_VERBOSE</code></strong> to be on to have an effect.
     * @return static
     */
    public function setCertinfo($boolean)
    {
        return $this->setOption('CURLOPT_CERTINFO', $boolean, 'boolean');
    }

    /**
     * CURLOPT_CERTINFO
     * 
     * @return boolean CURLOPT_CERTINFO
     */
    public function getCertinfo($boolean)
    {
        return $this->getOption('CURLOPT_CERTINFO');
    }

    /**
     * CURLOPT_CERTINFO
     * 
     * @return static
     */
    public function clearCertinfo($boolean)
    {
        return $this->clearOption('CURLOPT_CERTINFO');
    }

    /**
     * CURLOPT_CONNECT_ONLY
     * <strong><code>TRUE</code></strong> tells the library to perform all the
     * required proxy authentication and connection setup, but no data transfer.
     * This option is implemented for HTTP, SMTP and POP3.
     * 
     * @param boolean $boolean CURLOPT_CONNECT_ONLY
     * @since Added in 7.15.2. Available since PHP 5.5.0.
     * @return static
     */
    public function setConnectOnly($boolean)
    {
        return $this->setOption('CURLOPT_CONNECT_ONLY', $boolean, 'boolean');
    }

    /**
     * CURLOPT_CONNECT_ONLY
     * 
     * @return boolean CURLOPT_CONNECT_ONLY
     */
    public function getConnectOnly($boolean)
    {
        return $this->getOption('CURLOPT_CONNECT_ONLY');
    }

    /**
     * CURLOPT_CONNECT_ONLY
     * 
     * @return static
     */
    public function clearConnectOnly($boolean)
    {
        return $this->clearOption('CURLOPT_CONNECT_ONLY');
    }

    /**
     * CURLOPT_CRLF
     * <strong><code>TRUE</code></strong> to convert Unix newlines to CRLF
     * newlines on transfers.
     * 
     * @param boolean $boolean CURLOPT_CRLF
     * @return static
     */
    public function setCrlf($boolean)
    {
        return $this->setOption('CURLOPT_CRLF', $boolean, 'boolean');
    }

    /**
     * CURLOPT_CRLF
     * 
     * @return boolean CURLOPT_CRLF
     */
    public function getCrlf($boolean)
    {
        return $this->getOption('CURLOPT_CRLF');
    }

    /**
     * CURLOPT_CRLF
     * 
     * @return static
     */
    public function clearCrlf($boolean)
    {
        return $this->clearOption('CURLOPT_CRLF');
    }

    /**
     * CURLOPT_DNS_USE_GLOBAL_CACHE
     * <strong><code>TRUE</code></strong> to use a global DNS cache. This option
     * is not thread-safe and is enabled by default.
     * 
     * @param boolean $boolean CURLOPT_DNS_USE_GLOBAL_CACHE
     * @return static
     */
    public function setDnsUseGlobalCache($boolean)
    {
        return $this->setOption('CURLOPT_DNS_USE_GLOBAL_CACHE', $boolean, 'boolean');
    }

    /**
     * CURLOPT_DNS_USE_GLOBAL_CACHE
     * 
     * @return boolean CURLOPT_DNS_USE_GLOBAL_CACHE
     */
    public function getDnsUseGlobalCache($boolean)
    {
        return $this->getOption('CURLOPT_DNS_USE_GLOBAL_CACHE');
    }

    /**
     * CURLOPT_DNS_USE_GLOBAL_CACHE
     * 
     * @return static
     */
    public function clearDnsUseGlobalCache($boolean)
    {
        return $this->clearOption('CURLOPT_DNS_USE_GLOBAL_CACHE');
    }

    /**
     * CURLOPT_FAILONERROR
     * <strong><code>TRUE</code></strong> to fail verbosely if the HTTP code
     * returned is greater than or equal to 400. The default behavior is to return
     * the page normally, ignoring the code.
     * 
     * @param boolean $boolean CURLOPT_FAILONERROR
     * @return static
     */
    public function setFailonerror($boolean)
    {
        return $this->setOption('CURLOPT_FAILONERROR', $boolean, 'boolean');
    }

    /**
     * CURLOPT_FAILONERROR
     * 
     * @return boolean CURLOPT_FAILONERROR
     */
    public function getFailonerror($boolean)
    {
        return $this->getOption('CURLOPT_FAILONERROR');
    }

    /**
     * CURLOPT_FAILONERROR
     * 
     * @return static
     */
    public function clearFailonerror($boolean)
    {
        return $this->clearOption('CURLOPT_FAILONERROR');
    }

    /**
     * CURLOPT_SSL_FALSESTART
     * <strong><code>TRUE</code></strong> to enable TLS false start.
     * 
     * @param boolean $boolean CURLOPT_SSL_FALSESTART
     * @since Added in cURL 7.42.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setSslFalsestart($boolean)
    {
        return $this->setOption('CURLOPT_SSL_FALSESTART', $boolean, 'boolean');
    }

    /**
     * CURLOPT_SSL_FALSESTART
     * 
     * @return boolean CURLOPT_SSL_FALSESTART
     */
    public function getSslFalsestart($boolean)
    {
        return $this->getOption('CURLOPT_SSL_FALSESTART');
    }

    /**
     * CURLOPT_SSL_FALSESTART
     * 
     * @return static
     */
    public function clearSslFalsestart($boolean)
    {
        return $this->clearOption('CURLOPT_SSL_FALSESTART');
    }

    /**
     * CURLOPT_FILETIME
     * <strong><code>TRUE</code></strong> to attempt to retrieve the modification
     * date of the remote document. This value can be retrieved using the <code
     * class="parameter">CURLINFO_FILETIME</code> option with <span
     * class="function"><a href="function.curl-getinfo.php"
     * class="function">curl_getinfo()</a></span>.
     * 
     * @param boolean $boolean CURLOPT_FILETIME
     * @return static
     */
    public function setFiletime($boolean)
    {
        return $this->setOption('CURLOPT_FILETIME', $boolean, 'boolean');
    }

    /**
     * CURLOPT_FILETIME
     * 
     * @return boolean CURLOPT_FILETIME
     */
    public function getFiletime($boolean)
    {
        return $this->getOption('CURLOPT_FILETIME');
    }

    /**
     * CURLOPT_FILETIME
     * 
     * @return static
     */
    public function clearFiletime($boolean)
    {
        return $this->clearOption('CURLOPT_FILETIME');
    }

    /**
     * CURLOPT_FOLLOWLOCATION
     * <strong><code>TRUE</code></strong> to follow any <em>"Location: "</em>
     * header that the server sends as part of the HTTP header (note this is
     * recursive, PHP will follow as many <em>"Location: "</em> headers that it is
     * sent, unless <strong><code>CURLOPT_MAXREDIRS</code></strong> is set).
     * 
     * @param boolean $boolean CURLOPT_FOLLOWLOCATION
     * @return static
     */
    public function setFollowlocation($boolean)
    {
        return $this->setOption('CURLOPT_FOLLOWLOCATION', $boolean, 'boolean');
    }

    /**
     * CURLOPT_FOLLOWLOCATION
     * 
     * @return boolean CURLOPT_FOLLOWLOCATION
     */
    public function getFollowlocation($boolean)
    {
        return $this->getOption('CURLOPT_FOLLOWLOCATION');
    }

    /**
     * CURLOPT_FOLLOWLOCATION
     * 
     * @return static
     */
    public function clearFollowlocation($boolean)
    {
        return $this->clearOption('CURLOPT_FOLLOWLOCATION');
    }

    /**
     * CURLOPT_FORBID_REUSE
     * <strong><code>TRUE</code></strong> to force the connection to explicitly
     * close when it has finished processing, and not be pooled for reuse.
     * 
     * @param boolean $boolean CURLOPT_FORBID_REUSE
     * @return static
     */
    public function setForbidReuse($boolean)
    {
        return $this->setOption('CURLOPT_FORBID_REUSE', $boolean, 'boolean');
    }

    /**
     * CURLOPT_FORBID_REUSE
     * 
     * @return boolean CURLOPT_FORBID_REUSE
     */
    public function getForbidReuse($boolean)
    {
        return $this->getOption('CURLOPT_FORBID_REUSE');
    }

    /**
     * CURLOPT_FORBID_REUSE
     * 
     * @return static
     */
    public function clearForbidReuse($boolean)
    {
        return $this->clearOption('CURLOPT_FORBID_REUSE');
    }

    /**
     * CURLOPT_FRESH_CONNECT
     * <strong><code>TRUE</code></strong> to force the use of a new connection
     * instead of a cached one.
     * 
     * @param boolean $boolean CURLOPT_FRESH_CONNECT
     * @return static
     */
    public function setFreshConnect($boolean)
    {
        return $this->setOption('CURLOPT_FRESH_CONNECT', $boolean, 'boolean');
    }

    /**
     * CURLOPT_FRESH_CONNECT
     * 
     * @return boolean CURLOPT_FRESH_CONNECT
     */
    public function getFreshConnect($boolean)
    {
        return $this->getOption('CURLOPT_FRESH_CONNECT');
    }

    /**
     * CURLOPT_FRESH_CONNECT
     * 
     * @return static
     */
    public function clearFreshConnect($boolean)
    {
        return $this->clearOption('CURLOPT_FRESH_CONNECT');
    }

    /**
     * CURLOPT_FTP_USE_EPRT
     * <strong><code>TRUE</code></strong> to use EPRT (and LPRT) when doing active
     * FTP downloads. Use <strong><code>FALSE</code></strong> to disable EPRT and
     * LPRT and use PORT only.
     * 
     * @param boolean $boolean CURLOPT_FTP_USE_EPRT
     * @return static
     */
    public function setFtpUseEprt($boolean)
    {
        return $this->setOption('CURLOPT_FTP_USE_EPRT', $boolean, 'boolean');
    }

    /**
     * CURLOPT_FTP_USE_EPRT
     * 
     * @return boolean CURLOPT_FTP_USE_EPRT
     */
    public function getFtpUseEprt($boolean)
    {
        return $this->getOption('CURLOPT_FTP_USE_EPRT');
    }

    /**
     * CURLOPT_FTP_USE_EPRT
     * 
     * @return static
     */
    public function clearFtpUseEprt($boolean)
    {
        return $this->clearOption('CURLOPT_FTP_USE_EPRT');
    }

    /**
     * CURLOPT_FTP_USE_EPSV
     * <strong><code>TRUE</code></strong> to first try an EPSV command for FTP
     * transfers before reverting back to PASV. Set to
     * <strong><code>FALSE</code></strong> to disable EPSV.
     * 
     * @param boolean $boolean CURLOPT_FTP_USE_EPSV
     * @return static
     */
    public function setFtpUseEpsv($boolean)
    {
        return $this->setOption('CURLOPT_FTP_USE_EPSV', $boolean, 'boolean');
    }

    /**
     * CURLOPT_FTP_USE_EPSV
     * 
     * @return boolean CURLOPT_FTP_USE_EPSV
     */
    public function getFtpUseEpsv($boolean)
    {
        return $this->getOption('CURLOPT_FTP_USE_EPSV');
    }

    /**
     * CURLOPT_FTP_USE_EPSV
     * 
     * @return static
     */
    public function clearFtpUseEpsv($boolean)
    {
        return $this->clearOption('CURLOPT_FTP_USE_EPSV');
    }

    /**
     * CURLOPT_FTP_CREATE_MISSING_DIRS
     * <strong><code>TRUE</code></strong> to create missing directories when an
     * FTP operation encounters a path that currently doesn't exist.
     * 
     * @param boolean $boolean CURLOPT_FTP_CREATE_MISSING_DIRS
     * @return static
     */
    public function setFtpCreateMissingDirs($boolean)
    {
        return $this->setOption('CURLOPT_FTP_CREATE_MISSING_DIRS', $boolean, 'boolean');
    }

    /**
     * CURLOPT_FTP_CREATE_MISSING_DIRS
     * 
     * @return boolean CURLOPT_FTP_CREATE_MISSING_DIRS
     */
    public function getFtpCreateMissingDirs($boolean)
    {
        return $this->getOption('CURLOPT_FTP_CREATE_MISSING_DIRS');
    }

    /**
     * CURLOPT_FTP_CREATE_MISSING_DIRS
     * 
     * @return static
     */
    public function clearFtpCreateMissingDirs($boolean)
    {
        return $this->clearOption('CURLOPT_FTP_CREATE_MISSING_DIRS');
    }

    /**
     * CURLOPT_FTPAPPEND
     * <strong><code>TRUE</code></strong> to append to the remote file instead of
     * overwriting it.
     * 
     * @param boolean $boolean CURLOPT_FTPAPPEND
     * @return static
     */
    public function setFtpappend($boolean)
    {
        return $this->setOption('CURLOPT_FTPAPPEND', $boolean, 'boolean');
    }

    /**
     * CURLOPT_FTPAPPEND
     * 
     * @return boolean CURLOPT_FTPAPPEND
     */
    public function getFtpappend($boolean)
    {
        return $this->getOption('CURLOPT_FTPAPPEND');
    }

    /**
     * CURLOPT_FTPAPPEND
     * 
     * @return static
     */
    public function clearFtpappend($boolean)
    {
        return $this->clearOption('CURLOPT_FTPAPPEND');
    }

    /**
     * CURLOPT_TCP_NODELAY
     * <strong><code>TRUE</code></strong> to disable TCP's Nagle algorithm, which
     * tries to minimize the number of small packets on the network.
     * 
     * @param boolean $boolean CURLOPT_TCP_NODELAY
     * @since Available since PHP 5.2.1 for versions compiled with libcurl 7.11.2 or greater.
     * @return static
     */
    public function setTcpNodelay($boolean)
    {
        return $this->setOption('CURLOPT_TCP_NODELAY', $boolean, 'boolean');
    }

    /**
     * CURLOPT_TCP_NODELAY
     * 
     * @return boolean CURLOPT_TCP_NODELAY
     */
    public function getTcpNodelay($boolean)
    {
        return $this->getOption('CURLOPT_TCP_NODELAY');
    }

    /**
     * CURLOPT_TCP_NODELAY
     * 
     * @return static
     */
    public function clearTcpNodelay($boolean)
    {
        return $this->clearOption('CURLOPT_TCP_NODELAY');
    }

    /**
     * CURLOPT_FTPASCII
     * An alias of <strong><code>CURLOPT_TRANSFERTEXT</code></strong>. Use that
     * instead.
     * 
     * @param boolean $boolean CURLOPT_FTPASCII
     * @return static
     */
    public function setFtpascii($boolean)
    {
        return $this->setOption('CURLOPT_FTPASCII', $boolean, 'boolean');
    }

    /**
     * CURLOPT_FTPASCII
     * 
     * @return boolean CURLOPT_FTPASCII
     */
    public function getFtpascii($boolean)
    {
        return $this->getOption('CURLOPT_FTPASCII');
    }

    /**
     * CURLOPT_FTPASCII
     * 
     * @return static
     */
    public function clearFtpascii($boolean)
    {
        return $this->clearOption('CURLOPT_FTPASCII');
    }

    /**
     * CURLOPT_FTPLISTONLY
     * <strong><code>TRUE</code></strong> to only list the names of an FTP
     * directory.
     * 
     * @param boolean $boolean CURLOPT_FTPLISTONLY
     * @return static
     */
    public function setFtplistonly($boolean)
    {
        return $this->setOption('CURLOPT_FTPLISTONLY', $boolean, 'boolean');
    }

    /**
     * CURLOPT_FTPLISTONLY
     * 
     * @return boolean CURLOPT_FTPLISTONLY
     */
    public function getFtplistonly($boolean)
    {
        return $this->getOption('CURLOPT_FTPLISTONLY');
    }

    /**
     * CURLOPT_FTPLISTONLY
     * 
     * @return static
     */
    public function clearFtplistonly($boolean)
    {
        return $this->clearOption('CURLOPT_FTPLISTONLY');
    }

    /**
     * CURLOPT_HEADER
     * <strong><code>TRUE</code></strong> to include the header in the output.
     * 
     * @param boolean $boolean CURLOPT_HEADER
     * @return static
     */
    public function setHeader($boolean)
    {
        return $this->setOption('CURLOPT_HEADER', $boolean, 'boolean');
    }

    /**
     * CURLOPT_HEADER
     * 
     * @return boolean CURLOPT_HEADER
     */
    public function getHeader($boolean)
    {
        return $this->getOption('CURLOPT_HEADER');
    }

    /**
     * CURLOPT_HEADER
     * 
     * @return static
     */
    public function clearHeader($boolean)
    {
        return $this->clearOption('CURLOPT_HEADER');
    }

    /**
     * CURLINFO_HEADER_OUT
     * <strong><code>TRUE</code></strong> to track the handle's request string.
     * 
     * @param boolean $boolean CURLINFO_HEADER_OUT
     * @since Available since PHP 5.1.3. The <strong><code>CURLINFO_</code></strong> prefix is intentional.
     * @return static
     */
    public function setCurlinfoHeaderOut($boolean)
    {
        return $this->setOption('CURLINFO_HEADER_OUT', $boolean, 'boolean');
    }

    /**
     * CURLINFO_HEADER_OUT
     * 
     * @return boolean CURLINFO_HEADER_OUT
     */
    public function getCurlinfoHeaderOut($boolean)
    {
        return $this->getOption('CURLINFO_HEADER_OUT');
    }

    /**
     * CURLINFO_HEADER_OUT
     * 
     * @return static
     */
    public function clearCurlinfoHeaderOut($boolean)
    {
        return $this->clearOption('CURLINFO_HEADER_OUT');
    }

    /**
     * CURLOPT_HTTPGET
     * <strong><code>TRUE</code></strong> to reset the HTTP request method to GET.
     * Since GET is the default, this is only necessary if the request method has
     * been changed.
     * 
     * @param boolean $boolean CURLOPT_HTTPGET
     * @return static
     */
    public function setHttpget($boolean)
    {
        return $this->setOption('CURLOPT_HTTPGET', $boolean, 'boolean');
    }

    /**
     * CURLOPT_HTTPGET
     * 
     * @return boolean CURLOPT_HTTPGET
     */
    public function getHttpget($boolean)
    {
        return $this->getOption('CURLOPT_HTTPGET');
    }

    /**
     * CURLOPT_HTTPGET
     * 
     * @return static
     */
    public function clearHttpget($boolean)
    {
        return $this->clearOption('CURLOPT_HTTPGET');
    }

    /**
     * CURLOPT_HTTPPROXYTUNNEL
     * <strong><code>TRUE</code></strong> to tunnel through a given HTTP proxy.
     * 
     * @param boolean $boolean CURLOPT_HTTPPROXYTUNNEL
     * @return static
     */
    public function setHttpproxytunnel($boolean)
    {
        return $this->setOption('CURLOPT_HTTPPROXYTUNNEL', $boolean, 'boolean');
    }

    /**
     * CURLOPT_HTTPPROXYTUNNEL
     * 
     * @return boolean CURLOPT_HTTPPROXYTUNNEL
     */
    public function getHttpproxytunnel($boolean)
    {
        return $this->getOption('CURLOPT_HTTPPROXYTUNNEL');
    }

    /**
     * CURLOPT_HTTPPROXYTUNNEL
     * 
     * @return static
     */
    public function clearHttpproxytunnel($boolean)
    {
        return $this->clearOption('CURLOPT_HTTPPROXYTUNNEL');
    }

    /**
     * CURLOPT_MUTE
     * <strong><code>TRUE</code></strong> to be completely silent with regards to
     * the cURL functions.
     * 
     * @param boolean $boolean CURLOPT_MUTE
     * @since Removed in cURL 7.15.5 (You can use CURLOPT_RETURNTRANSFER instead)
     * @return static
     */
    public function setMute($boolean)
    {
        return $this->setOption('CURLOPT_MUTE', $boolean, 'boolean');
    }

    /**
     * CURLOPT_MUTE
     * 
     * @return boolean CURLOPT_MUTE
     */
    public function getMute($boolean)
    {
        return $this->getOption('CURLOPT_MUTE');
    }

    /**
     * CURLOPT_MUTE
     * 
     * @return static
     */
    public function clearMute($boolean)
    {
        return $this->clearOption('CURLOPT_MUTE');
    }

    /**
     * CURLOPT_NETRC
     * <strong><code>TRUE</code></strong> to scan the <var
     * class="filename">~/.netrc</var> file to find a username and password for
     * the remote site that a connection is being established with.
     * 
     * @param boolean $boolean CURLOPT_NETRC
     * @return static
     */
    public function setNetrc($boolean)
    {
        return $this->setOption('CURLOPT_NETRC', $boolean, 'boolean');
    }

    /**
     * CURLOPT_NETRC
     * 
     * @return boolean CURLOPT_NETRC
     */
    public function getNetrc($boolean)
    {
        return $this->getOption('CURLOPT_NETRC');
    }

    /**
     * CURLOPT_NETRC
     * 
     * @return static
     */
    public function clearNetrc($boolean)
    {
        return $this->clearOption('CURLOPT_NETRC');
    }

    /**
     * CURLOPT_NOBODY
     * <strong><code>TRUE</code></strong> to exclude the body from the output.
     * Request method is then set to HEAD. Changing this to
     * <strong><code>FALSE</code></strong> does not change it to GET.
     * 
     * @param boolean $boolean CURLOPT_NOBODY
     * @return static
     */
    public function setNobody($boolean)
    {
        return $this->setOption('CURLOPT_NOBODY', $boolean, 'boolean');
    }

    /**
     * CURLOPT_NOBODY
     * 
     * @return boolean CURLOPT_NOBODY
     */
    public function getNobody($boolean)
    {
        return $this->getOption('CURLOPT_NOBODY');
    }

    /**
     * CURLOPT_NOBODY
     * 
     * @return static
     */
    public function clearNobody($boolean)
    {
        return $this->clearOption('CURLOPT_NOBODY');
    }

    /**
     * CURLOPT_NOPROGRESS
     * <p class="para"> <strong><code>TRUE</code></strong> to disable the progress
     * meter for cURL transfers. </p><blockquote class="note"><p><strong
     * class="note">Note</strong>: </p><p class="para"> PHP automatically sets
     * this option to <strong><code>TRUE</code></strong>, this should only be
     * changed for debugging purposes. </p> </blockquote>
     * 
     * @param boolean $boolean CURLOPT_NOPROGRESS
     * @return static
     */
    public function setNoprogress($boolean)
    {
        return $this->setOption('CURLOPT_NOPROGRESS', $boolean, 'boolean');
    }

    /**
     * CURLOPT_NOPROGRESS
     * 
     * @return boolean CURLOPT_NOPROGRESS
     */
    public function getNoprogress($boolean)
    {
        return $this->getOption('CURLOPT_NOPROGRESS');
    }

    /**
     * CURLOPT_NOPROGRESS
     * 
     * @return static
     */
    public function clearNoprogress($boolean)
    {
        return $this->clearOption('CURLOPT_NOPROGRESS');
    }

    /**
     * CURLOPT_NOSIGNAL
     * <strong><code>TRUE</code></strong> to ignore any cURL function that causes
     * a signal to be sent to the PHP process. This is turned on by default in
     * multi-threaded SAPIs so timeout options can still be used.
     * 
     * @param boolean $boolean CURLOPT_NOSIGNAL
     * @since Added in cURL 7.10.
     * @return static
     */
    public function setNosignal($boolean)
    {
        return $this->setOption('CURLOPT_NOSIGNAL', $boolean, 'boolean');
    }

    /**
     * CURLOPT_NOSIGNAL
     * 
     * @return boolean CURLOPT_NOSIGNAL
     */
    public function getNosignal($boolean)
    {
        return $this->getOption('CURLOPT_NOSIGNAL');
    }

    /**
     * CURLOPT_NOSIGNAL
     * 
     * @return static
     */
    public function clearNosignal($boolean)
    {
        return $this->clearOption('CURLOPT_NOSIGNAL');
    }

    /**
     * CURLOPT_PATH_AS_IS
     * <strong><code>TRUE</code></strong> to not handle dot dot sequences.
     * 
     * @param boolean $boolean CURLOPT_PATH_AS_IS
     * @since Added in cURL 7.42.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setPathAsIs($boolean)
    {
        return $this->setOption('CURLOPT_PATH_AS_IS', $boolean, 'boolean');
    }

    /**
     * CURLOPT_PATH_AS_IS
     * 
     * @return boolean CURLOPT_PATH_AS_IS
     */
    public function getPathAsIs($boolean)
    {
        return $this->getOption('CURLOPT_PATH_AS_IS');
    }

    /**
     * CURLOPT_PATH_AS_IS
     * 
     * @return static
     */
    public function clearPathAsIs($boolean)
    {
        return $this->clearOption('CURLOPT_PATH_AS_IS');
    }

    /**
     * CURLOPT_PIPEWAIT
     * <strong><code>TRUE</code></strong> to wait for pipelining/multiplexing.
     * 
     * @param boolean $boolean CURLOPT_PIPEWAIT
     * @since Added in cURL 7.43.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setPipewait($boolean)
    {
        return $this->setOption('CURLOPT_PIPEWAIT', $boolean, 'boolean');
    }

    /**
     * CURLOPT_PIPEWAIT
     * 
     * @return boolean CURLOPT_PIPEWAIT
     */
    public function getPipewait($boolean)
    {
        return $this->getOption('CURLOPT_PIPEWAIT');
    }

    /**
     * CURLOPT_PIPEWAIT
     * 
     * @return static
     */
    public function clearPipewait($boolean)
    {
        return $this->clearOption('CURLOPT_PIPEWAIT');
    }

    /**
     * CURLOPT_POST
     * <strong><code>TRUE</code></strong> to do a regular HTTP POST. This POST is
     * the normal <em>application/x-www-form-urlencoded</em> kind, most commonly
     * used by HTML forms.
     * 
     * @param boolean $boolean CURLOPT_POST
     * @return static
     */
    public function setPost($boolean)
    {
        return $this->setOption('CURLOPT_POST', $boolean, 'boolean');
    }

    /**
     * CURLOPT_POST
     * 
     * @return boolean CURLOPT_POST
     */
    public function getPost($boolean)
    {
        return $this->getOption('CURLOPT_POST');
    }

    /**
     * CURLOPT_POST
     * 
     * @return static
     */
    public function clearPost($boolean)
    {
        return $this->clearOption('CURLOPT_POST');
    }

    /**
     * CURLOPT_PUT
     * <strong><code>TRUE</code></strong> to HTTP PUT a file. The file to PUT must
     * be set with <strong><code>CURLOPT_INFILE</code></strong> and
     * <strong><code>CURLOPT_INFILESIZE</code></strong>.
     * 
     * @param boolean $boolean CURLOPT_PUT
     * @return static
     */
    public function setPut($boolean)
    {
        return $this->setOption('CURLOPT_PUT', $boolean, 'boolean');
    }

    /**
     * CURLOPT_PUT
     * 
     * @return boolean CURLOPT_PUT
     */
    public function getPut($boolean)
    {
        return $this->getOption('CURLOPT_PUT');
    }

    /**
     * CURLOPT_PUT
     * 
     * @return static
     */
    public function clearPut($boolean)
    {
        return $this->clearOption('CURLOPT_PUT');
    }

    /**
     * CURLOPT_RETURNTRANSFER
     * <strong><code>TRUE</code></strong> to return the transfer as a string of
     * the return value of <span class="function"><a href="function.curl-exec.php"
     * class="function">curl_exec()</a></span> instead of outputting it out
     * directly.
     * 
     * @param boolean $boolean CURLOPT_RETURNTRANSFER
     * @return static
     */
    public function setReturntransfer($boolean)
    {
        return $this->setOption('CURLOPT_RETURNTRANSFER', $boolean, 'boolean');
    }

    /**
     * CURLOPT_RETURNTRANSFER
     * 
     * @return boolean CURLOPT_RETURNTRANSFER
     */
    public function getReturntransfer($boolean)
    {
        return $this->getOption('CURLOPT_RETURNTRANSFER');
    }

    /**
     * CURLOPT_RETURNTRANSFER
     * 
     * @return static
     */
    public function clearReturntransfer($boolean)
    {
        return $this->clearOption('CURLOPT_RETURNTRANSFER');
    }

    /**
     * CURLOPT_SAFE_UPLOAD
     * <strong><code>TRUE</code></strong> to disable support for the <em>@</em>
     * prefix for uploading files in
     * <strong><code>CURLOPT_POSTFIELDS</code></strong>, which means that values
     * starting with <em>@</em> can be safely passed as fields. <a
     * href="class.curlfile.php" class="classname">CURLFile</a> may be used for
     * uploads instead.
     * 
     * @param boolean $boolean CURLOPT_SAFE_UPLOAD
     * @since Added in PHP 5.5.0 with <strong><code>FALSE</code></strong> as the default value. PHP 5.6.0 changes the default value to <strong><code>TRUE</code></strong>.
     * @return static
     */
    public function setSafeUpload($boolean)
    {
        return $this->setOption('CURLOPT_SAFE_UPLOAD', $boolean, 'boolean');
    }

    /**
     * CURLOPT_SAFE_UPLOAD
     * 
     * @return boolean CURLOPT_SAFE_UPLOAD
     */
    public function getSafeUpload($boolean)
    {
        return $this->getOption('CURLOPT_SAFE_UPLOAD');
    }

    /**
     * CURLOPT_SAFE_UPLOAD
     * 
     * @return static
     */
    public function clearSafeUpload($boolean)
    {
        return $this->clearOption('CURLOPT_SAFE_UPLOAD');
    }

    /**
     * CURLOPT_SASL_IR
     * <strong><code>TRUE</code></strong> to enable sending the initial response
     * in the first packet.
     * 
     * @param boolean $boolean CURLOPT_SASL_IR
     * @since Added in cURL 7.31.10. Available since PHP 7.0.7.
     * @return static
     */
    public function setSaslIr($boolean)
    {
        return $this->setOption('CURLOPT_SASL_IR', $boolean, 'boolean');
    }

    /**
     * CURLOPT_SASL_IR
     * 
     * @return boolean CURLOPT_SASL_IR
     */
    public function getSaslIr($boolean)
    {
        return $this->getOption('CURLOPT_SASL_IR');
    }

    /**
     * CURLOPT_SASL_IR
     * 
     * @return static
     */
    public function clearSaslIr($boolean)
    {
        return $this->clearOption('CURLOPT_SASL_IR');
    }

    /**
     * CURLOPT_SSL_ENABLE_ALPN
     * <strong><code>FALSE</code></strong> to disable ALPN in the SSL handshake
     * (if the SSL backend libcurl is built to use supports it), which can be used
     * to negotiate http2.
     * 
     * @param boolean $boolean CURLOPT_SSL_ENABLE_ALPN
     * @since Added in cURL 7.36.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setSslEnableAlpn($boolean)
    {
        return $this->setOption('CURLOPT_SSL_ENABLE_ALPN', $boolean, 'boolean');
    }

    /**
     * CURLOPT_SSL_ENABLE_ALPN
     * 
     * @return boolean CURLOPT_SSL_ENABLE_ALPN
     */
    public function getSslEnableAlpn($boolean)
    {
        return $this->getOption('CURLOPT_SSL_ENABLE_ALPN');
    }

    /**
     * CURLOPT_SSL_ENABLE_ALPN
     * 
     * @return static
     */
    public function clearSslEnableAlpn($boolean)
    {
        return $this->clearOption('CURLOPT_SSL_ENABLE_ALPN');
    }

    /**
     * CURLOPT_SSL_ENABLE_NPN
     * <strong><code>FALSE</code></strong> to disable NPN in the SSL handshake (if
     * the SSL backend libcurl is built to use supports it), which can be used to
     * negotiate http2.
     * 
     * @param boolean $boolean CURLOPT_SSL_ENABLE_NPN
     * @since Added in cURL 7.36.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setSslEnableNpn($boolean)
    {
        return $this->setOption('CURLOPT_SSL_ENABLE_NPN', $boolean, 'boolean');
    }

    /**
     * CURLOPT_SSL_ENABLE_NPN
     * 
     * @return boolean CURLOPT_SSL_ENABLE_NPN
     */
    public function getSslEnableNpn($boolean)
    {
        return $this->getOption('CURLOPT_SSL_ENABLE_NPN');
    }

    /**
     * CURLOPT_SSL_ENABLE_NPN
     * 
     * @return static
     */
    public function clearSslEnableNpn($boolean)
    {
        return $this->clearOption('CURLOPT_SSL_ENABLE_NPN');
    }

    /**
     * CURLOPT_SSL_VERIFYPEER
     * <strong><code>FALSE</code></strong> to stop cURL from verifying the peer's
     * certificate. Alternate certificates to verify against can be specified with
     * the <strong><code>CURLOPT_CAINFO</code></strong> option or a certificate
     * directory can be specified with the
     * <strong><code>CURLOPT_CAPATH</code></strong> option.
     * 
     * @param boolean $boolean CURLOPT_SSL_VERIFYPEER
     * @since <strong><code>TRUE</code></strong> by default as of cURL 7.10. Default bundle installed as of cURL 7.10.
     * @return static
     */
    public function setSslVerifypeer($boolean)
    {
        return $this->setOption('CURLOPT_SSL_VERIFYPEER', $boolean, 'boolean');
    }

    /**
     * CURLOPT_SSL_VERIFYPEER
     * 
     * @return boolean CURLOPT_SSL_VERIFYPEER
     */
    public function getSslVerifypeer($boolean)
    {
        return $this->getOption('CURLOPT_SSL_VERIFYPEER');
    }

    /**
     * CURLOPT_SSL_VERIFYPEER
     * 
     * @return static
     */
    public function clearSslVerifypeer($boolean)
    {
        return $this->clearOption('CURLOPT_SSL_VERIFYPEER');
    }

    /**
     * CURLOPT_SSL_VERIFYSTATUS
     * <strong><code>TRUE</code></strong> to verify the certificate's status.
     * 
     * @param boolean $boolean CURLOPT_SSL_VERIFYSTATUS
     * @since Added in cURL 7.41.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setSslVerifystatus($boolean)
    {
        return $this->setOption('CURLOPT_SSL_VERIFYSTATUS', $boolean, 'boolean');
    }

    /**
     * CURLOPT_SSL_VERIFYSTATUS
     * 
     * @return boolean CURLOPT_SSL_VERIFYSTATUS
     */
    public function getSslVerifystatus($boolean)
    {
        return $this->getOption('CURLOPT_SSL_VERIFYSTATUS');
    }

    /**
     * CURLOPT_SSL_VERIFYSTATUS
     * 
     * @return static
     */
    public function clearSslVerifystatus($boolean)
    {
        return $this->clearOption('CURLOPT_SSL_VERIFYSTATUS');
    }

    /**
     * CURLOPT_TCP_FASTOPEN
     * <strong><code>TRUE</code></strong> to enable TCP Fast Open.
     * 
     * @param boolean $boolean CURLOPT_TCP_FASTOPEN
     * @since Added in cURL 7.49.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setTcpFastopen($boolean)
    {
        return $this->setOption('CURLOPT_TCP_FASTOPEN', $boolean, 'boolean');
    }

    /**
     * CURLOPT_TCP_FASTOPEN
     * 
     * @return boolean CURLOPT_TCP_FASTOPEN
     */
    public function getTcpFastopen($boolean)
    {
        return $this->getOption('CURLOPT_TCP_FASTOPEN');
    }

    /**
     * CURLOPT_TCP_FASTOPEN
     * 
     * @return static
     */
    public function clearTcpFastopen($boolean)
    {
        return $this->clearOption('CURLOPT_TCP_FASTOPEN');
    }

    /**
     * CURLOPT_TFTP_NO_OPTIONS
     * <strong><code>TRUE</code></strong> to not send TFTP options requests.
     * 
     * @param boolean $boolean CURLOPT_TFTP_NO_OPTIONS
     * @since Added in cURL 7.48.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setTftpNoOptions($boolean)
    {
        return $this->setOption('CURLOPT_TFTP_NO_OPTIONS', $boolean, 'boolean');
    }

    /**
     * CURLOPT_TFTP_NO_OPTIONS
     * 
     * @return boolean CURLOPT_TFTP_NO_OPTIONS
     */
    public function getTftpNoOptions($boolean)
    {
        return $this->getOption('CURLOPT_TFTP_NO_OPTIONS');
    }

    /**
     * CURLOPT_TFTP_NO_OPTIONS
     * 
     * @return static
     */
    public function clearTftpNoOptions($boolean)
    {
        return $this->clearOption('CURLOPT_TFTP_NO_OPTIONS');
    }

    /**
     * CURLOPT_TRANSFERTEXT
     * <strong><code>TRUE</code></strong> to use ASCII mode for FTP transfers. For
     * LDAP, it retrieves data in plain text instead of HTML. On Windows systems,
     * it will not set <em>STDOUT</em> to binary mode.
     * 
     * @param boolean $boolean CURLOPT_TRANSFERTEXT
     * @return static
     */
    public function setTransfertext($boolean)
    {
        return $this->setOption('CURLOPT_TRANSFERTEXT', $boolean, 'boolean');
    }

    /**
     * CURLOPT_TRANSFERTEXT
     * 
     * @return boolean CURLOPT_TRANSFERTEXT
     */
    public function getTransfertext($boolean)
    {
        return $this->getOption('CURLOPT_TRANSFERTEXT');
    }

    /**
     * CURLOPT_TRANSFERTEXT
     * 
     * @return static
     */
    public function clearTransfertext($boolean)
    {
        return $this->clearOption('CURLOPT_TRANSFERTEXT');
    }

    /**
     * CURLOPT_UNRESTRICTED_AUTH
     * <strong><code>TRUE</code></strong> to keep sending the username and
     * password when following locations (using
     * <strong><code>CURLOPT_FOLLOWLOCATION</code></strong>), even when the
     * hostname has changed.
     * 
     * @param boolean $boolean CURLOPT_UNRESTRICTED_AUTH
     * @return static
     */
    public function setUnrestrictedAuth($boolean)
    {
        return $this->setOption('CURLOPT_UNRESTRICTED_AUTH', $boolean, 'boolean');
    }

    /**
     * CURLOPT_UNRESTRICTED_AUTH
     * 
     * @return boolean CURLOPT_UNRESTRICTED_AUTH
     */
    public function getUnrestrictedAuth($boolean)
    {
        return $this->getOption('CURLOPT_UNRESTRICTED_AUTH');
    }

    /**
     * CURLOPT_UNRESTRICTED_AUTH
     * 
     * @return static
     */
    public function clearUnrestrictedAuth($boolean)
    {
        return $this->clearOption('CURLOPT_UNRESTRICTED_AUTH');
    }

    /**
     * CURLOPT_UPLOAD
     * <strong><code>TRUE</code></strong> to prepare for an upload.
     * 
     * @param boolean $boolean CURLOPT_UPLOAD
     * @return static
     */
    public function setUpload($boolean)
    {
        return $this->setOption('CURLOPT_UPLOAD', $boolean, 'boolean');
    }

    /**
     * CURLOPT_UPLOAD
     * 
     * @return boolean CURLOPT_UPLOAD
     */
    public function getUpload($boolean)
    {
        return $this->getOption('CURLOPT_UPLOAD');
    }

    /**
     * CURLOPT_UPLOAD
     * 
     * @return static
     */
    public function clearUpload($boolean)
    {
        return $this->clearOption('CURLOPT_UPLOAD');
    }

    /**
     * CURLOPT_VERBOSE
     * <strong><code>TRUE</code></strong> to output verbose information. Writes
     * output to <em>STDERR</em>, or the file specified using
     * <strong><code>CURLOPT_STDERR</code></strong>.
     * 
     * @param boolean $boolean CURLOPT_VERBOSE
     * @return static
     */
    public function setVerbose($boolean)
    {
        return $this->setOption('CURLOPT_VERBOSE', $boolean, 'boolean');
    }

    /**
     * CURLOPT_VERBOSE
     * 
     * @return boolean CURLOPT_VERBOSE
     */
    public function getVerbose($boolean)
    {
        return $this->getOption('CURLOPT_VERBOSE');
    }

    /**
     * CURLOPT_VERBOSE
     * 
     * @return static
     */
    public function clearVerbose($boolean)
    {
        return $this->clearOption('CURLOPT_VERBOSE');
    }

    /**
     * CURLOPT_BUFFERSIZE
     * The size of the buffer to use for each read. There is no guarantee this
     * request will be fulfilled, however.
     * 
     * @param int $int CURLOPT_BUFFERSIZE
     * @since Added in cURL 7.10.
     * @return static
     */
    public function setBuffersize($int)
    {
        return $this->setOption('CURLOPT_BUFFERSIZE', $int, 'int');
    }

    /**
     * CURLOPT_BUFFERSIZE
     * 
     * @return int CURLOPT_BUFFERSIZE
     */
    public function getBuffersize($int)
    {
        return $this->getOption('CURLOPT_BUFFERSIZE');
    }

    /**
     * CURLOPT_BUFFERSIZE
     * 
     * @return static
     */
    public function clearBuffersize($int)
    {
        return $this->clearOption('CURLOPT_BUFFERSIZE');
    }

    /**
     * CURLOPT_CLOSEPOLICY
     * One of the <strong><code>CURLCLOSEPOLICY_*</code></strong> values.
     * <blockquote class="note"><p><strong class="note">Note</strong>: </p><p
     * class="para"> This option is deprecated, as it was never implemented in
     * cURL and never had any effect. </p> </blockquote>
     * 
     * @param int $int CURLOPT_CLOSEPOLICY
     * @since Removed in PHP 5.6.0.
     * @return static
     */
    public function setClosepolicy($int)
    {
        return $this->setOption('CURLOPT_CLOSEPOLICY', $int, 'int');
    }

    /**
     * CURLOPT_CLOSEPOLICY
     * 
     * @return int CURLOPT_CLOSEPOLICY
     */
    public function getClosepolicy($int)
    {
        return $this->getOption('CURLOPT_CLOSEPOLICY');
    }

    /**
     * CURLOPT_CLOSEPOLICY
     * 
     * @return static
     */
    public function clearClosepolicy($int)
    {
        return $this->clearOption('CURLOPT_CLOSEPOLICY');
    }

    /**
     * CURLOPT_CONNECTTIMEOUT
     * The number of seconds to wait while trying to connect. Use 0 to wait
     * indefinitely.
     * 
     * @param int $int CURLOPT_CONNECTTIMEOUT
     * @return static
     */
    public function setConnecttimeout($int)
    {
        return $this->setOption('CURLOPT_CONNECTTIMEOUT', $int, 'int');
    }

    /**
     * CURLOPT_CONNECTTIMEOUT
     * 
     * @return int CURLOPT_CONNECTTIMEOUT
     */
    public function getConnecttimeout($int)
    {
        return $this->getOption('CURLOPT_CONNECTTIMEOUT');
    }

    /**
     * CURLOPT_CONNECTTIMEOUT
     * 
     * @return static
     */
    public function clearConnecttimeout($int)
    {
        return $this->clearOption('CURLOPT_CONNECTTIMEOUT');
    }

    /**
     * CURLOPT_CONNECTTIMEOUT_MS
     * The number of milliseconds to wait while trying to connect. Use 0 to wait
     * indefinitely. If libcurl is built to use the standard system name resolver,
     * that portion of the connect will still use full-second resolution for
     * timeouts with a minimum timeout allowed of one second.
     * 
     * @param int $int CURLOPT_CONNECTTIMEOUT_MS
     * @since Added in cURL 7.16.2. Available since PHP 5.2.3.
     * @return static
     */
    public function setConnecttimeoutMs($int)
    {
        return $this->setOption('CURLOPT_CONNECTTIMEOUT_MS', $int, 'int');
    }

    /**
     * CURLOPT_CONNECTTIMEOUT_MS
     * 
     * @return int CURLOPT_CONNECTTIMEOUT_MS
     */
    public function getConnecttimeoutMs($int)
    {
        return $this->getOption('CURLOPT_CONNECTTIMEOUT_MS');
    }

    /**
     * CURLOPT_CONNECTTIMEOUT_MS
     * 
     * @return static
     */
    public function clearConnecttimeoutMs($int)
    {
        return $this->clearOption('CURLOPT_CONNECTTIMEOUT_MS');
    }

    /**
     * CURLOPT_DNS_CACHE_TIMEOUT
     * The number of seconds to keep DNS entries in memory. This option is set to
     * 120 (2 minutes) by default.
     * 
     * @param int $int CURLOPT_DNS_CACHE_TIMEOUT
     * @return static
     */
    public function setDnsCacheTimeout($int)
    {
        return $this->setOption('CURLOPT_DNS_CACHE_TIMEOUT', $int, 'int');
    }

    /**
     * CURLOPT_DNS_CACHE_TIMEOUT
     * 
     * @return int CURLOPT_DNS_CACHE_TIMEOUT
     */
    public function getDnsCacheTimeout($int)
    {
        return $this->getOption('CURLOPT_DNS_CACHE_TIMEOUT');
    }

    /**
     * CURLOPT_DNS_CACHE_TIMEOUT
     * 
     * @return static
     */
    public function clearDnsCacheTimeout($int)
    {
        return $this->clearOption('CURLOPT_DNS_CACHE_TIMEOUT');
    }

    /**
     * CURLOPT_EXPECT_100_TIMEOUT_MS
     * The timeout for Expect: 100-continue responses in milliseconds. Defaults to
     * 1000 milliseconds.
     * 
     * @param int $int CURLOPT_EXPECT_100_TIMEOUT_MS
     * @since Added in cURL 7.36.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setExpect100TimeoutMs($int)
    {
        return $this->setOption('CURLOPT_EXPECT_100_TIMEOUT_MS', $int, 'int');
    }

    /**
     * CURLOPT_EXPECT_100_TIMEOUT_MS
     * 
     * @return int CURLOPT_EXPECT_100_TIMEOUT_MS
     */
    public function getExpect100TimeoutMs($int)
    {
        return $this->getOption('CURLOPT_EXPECT_100_TIMEOUT_MS');
    }

    /**
     * CURLOPT_EXPECT_100_TIMEOUT_MS
     * 
     * @return static
     */
    public function clearExpect100TimeoutMs($int)
    {
        return $this->clearOption('CURLOPT_EXPECT_100_TIMEOUT_MS');
    }

    /**
     * CURLOPT_FTPSSLAUTH
     * The FTP authentication method (when is activated): <em>CURLFTPAUTH_SSL</em>
     * (try SSL first), <em>CURLFTPAUTH_TLS</em> (try TLS first), or
     * <em>CURLFTPAUTH_DEFAULT</em> (let cURL decide).
     * 
     * @param int $int CURLOPT_FTPSSLAUTH
     * @since Added in cURL 7.12.2.
     * @return static
     */
    public function setFtpsslauth($int)
    {
        return $this->setOption('CURLOPT_FTPSSLAUTH', $int, 'int');
    }

    /**
     * CURLOPT_FTPSSLAUTH
     * 
     * @return int CURLOPT_FTPSSLAUTH
     */
    public function getFtpsslauth($int)
    {
        return $this->getOption('CURLOPT_FTPSSLAUTH');
    }

    /**
     * CURLOPT_FTPSSLAUTH
     * 
     * @return static
     */
    public function clearFtpsslauth($int)
    {
        return $this->clearOption('CURLOPT_FTPSSLAUTH');
    }

    /**
     * CURLOPT_HEADEROPT
     * How to deal with headers. One of the following constants: <span
     * class="simpara"> <strong><code>CURLHEADER_UNIFIED</code></strong>: the
     * headers specified in <strong><code>CURLOPT_HTTPHEADER</code></strong> will
     * be used in requests both to servers and proxies. With this option enabled,
     * <strong><code>CURLOPT_PROXYHEADER</code></strong> will not have any effect.
     * </span> <span class="simpara">
     * <strong><code>CURLHEADER_SEPARATE</code></strong>: makes
     * <strong><code>CURLOPT_HTTPHEADER</code></strong> headers only get sent to a
     * server and not to a proxy. Proxy headers must be set with
     * <strong><code>CURLOPT_PROXYHEADER</code></strong> to get used. Note that if
     * a non-CONNECT request is sent to a proxy, libcurl will send both server
     * headers and proxy headers. When doing CONNECT, libcurl will send
     * <strong><code>CURLOPT_PROXYHEADER</code></strong> headers only to the proxy
     * and then <strong><code>CURLOPT_HTTPHEADER</code></strong> headers only to
     * the server. </span> <span class="simpara"> Defaults to
     * <strong><code>CURLHEADER_SEPARATE</code></strong> as of cURL 7.42.1, and
     * <strong><code>CURLHEADER_UNIFIED</code></strong> before. </span>
     * 
     * @param int $int CURLOPT_HEADEROPT
     * @since Added in cURL 7.37.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setHeaderopt($int)
    {
        return $this->setOption('CURLOPT_HEADEROPT', $int, 'int');
    }

    /**
     * CURLOPT_HEADEROPT
     * 
     * @return int CURLOPT_HEADEROPT
     */
    public function getHeaderopt($int)
    {
        return $this->getOption('CURLOPT_HEADEROPT');
    }

    /**
     * CURLOPT_HEADEROPT
     * 
     * @return static
     */
    public function clearHeaderopt($int)
    {
        return $this->clearOption('CURLOPT_HEADEROPT');
    }

    /**
     * CURLOPT_HTTP_VERSION
     * <code class="parameter">CURL_HTTP_VERSION_NONE</code> (default, lets CURL
     * decide which version to use), <code
     * class="parameter">CURL_HTTP_VERSION_1_0</code> (forces HTTP/1.0), or <code
     * class="parameter">CURL_HTTP_VERSION_1_1</code> (forces HTTP/1.1).
     * 
     * @param int $int CURLOPT_HTTP_VERSION
     * @return static
     */
    public function setHttpVersion($int)
    {
        return $this->setOption('CURLOPT_HTTP_VERSION', $int, 'int');
    }

    /**
     * CURLOPT_HTTP_VERSION
     * 
     * @return int CURLOPT_HTTP_VERSION
     */
    public function getHttpVersion($int)
    {
        return $this->getOption('CURLOPT_HTTP_VERSION');
    }

    /**
     * CURLOPT_HTTP_VERSION
     * 
     * @return static
     */
    public function clearHttpVersion($int)
    {
        return $this->clearOption('CURLOPT_HTTP_VERSION');
    }

    /**
     * CURLOPT_HTTPAUTH
     * <p class="para"> The HTTP authentication method(s) to use. The options are:
     * <code class="parameter">CURLAUTH_BASIC</code>, <code
     * class="parameter">CURLAUTH_DIGEST</code>, <code
     * class="parameter">CURLAUTH_GSSNEGOTIATE</code>, <code
     * class="parameter">CURLAUTH_NTLM</code>, <code
     * class="parameter">CURLAUTH_ANY</code>, and <code
     * class="parameter">CURLAUTH_ANYSAFE</code>. </p> <p class="para"> The
     * bitwise <em>|</em> (or) operator can be used to combine more than one
     * method. If this is done, cURL will poll the server to see what methods it
     * supports and pick the best one. </p> <p class="para"> <code
     * class="parameter">CURLAUTH_ANY</code> is an alias for <em>CURLAUTH_BASIC |
     * CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</em>. </p> <p
     * class="para"> <code class="parameter">CURLAUTH_ANYSAFE</code> is an alias
     * for <em>CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</em>. </p>
     * 
     * @param int $int CURLOPT_HTTPAUTH
     * @return static
     */
    public function setHttpauth($int)
    {
        return $this->setOption('CURLOPT_HTTPAUTH', $int, 'int');
    }

    /**
     * CURLOPT_HTTPAUTH
     * 
     * @return int CURLOPT_HTTPAUTH
     */
    public function getHttpauth($int)
    {
        return $this->getOption('CURLOPT_HTTPAUTH');
    }

    /**
     * CURLOPT_HTTPAUTH
     * 
     * @return static
     */
    public function clearHttpauth($int)
    {
        return $this->clearOption('CURLOPT_HTTPAUTH');
    }

    /**
     * CURLOPT_INFILESIZE
     * The expected size, in bytes, of the file when uploading a file to a remote
     * site. Note that using this option will not stop libcurl from sending more
     * data, as exactly what is sent depends on
     * <strong><code>CURLOPT_READFUNCTION</code></strong>.
     * 
     * @param int $int CURLOPT_INFILESIZE
     * @return static
     */
    public function setInfilesize($int)
    {
        return $this->setOption('CURLOPT_INFILESIZE', $int, 'int');
    }

    /**
     * CURLOPT_INFILESIZE
     * 
     * @return int CURLOPT_INFILESIZE
     */
    public function getInfilesize($int)
    {
        return $this->getOption('CURLOPT_INFILESIZE');
    }

    /**
     * CURLOPT_INFILESIZE
     * 
     * @return static
     */
    public function clearInfilesize($int)
    {
        return $this->clearOption('CURLOPT_INFILESIZE');
    }

    /**
     * CURLOPT_LOW_SPEED_LIMIT
     * The transfer speed, in bytes per second, that the transfer should be below
     * during the count of <strong><code>CURLOPT_LOW_SPEED_TIME</code></strong>
     * seconds before PHP considers the transfer too slow and aborts.
     * 
     * @param int $int CURLOPT_LOW_SPEED_LIMIT
     * @return static
     */
    public function setLowSpeedLimit($int)
    {
        return $this->setOption('CURLOPT_LOW_SPEED_LIMIT', $int, 'int');
    }

    /**
     * CURLOPT_LOW_SPEED_LIMIT
     * 
     * @return int CURLOPT_LOW_SPEED_LIMIT
     */
    public function getLowSpeedLimit($int)
    {
        return $this->getOption('CURLOPT_LOW_SPEED_LIMIT');
    }

    /**
     * CURLOPT_LOW_SPEED_LIMIT
     * 
     * @return static
     */
    public function clearLowSpeedLimit($int)
    {
        return $this->clearOption('CURLOPT_LOW_SPEED_LIMIT');
    }

    /**
     * CURLOPT_LOW_SPEED_TIME
     * The number of seconds the transfer speed should be below
     * <strong><code>CURLOPT_LOW_SPEED_LIMIT</code></strong> before PHP considers
     * the transfer too slow and aborts.
     * 
     * @param int $int CURLOPT_LOW_SPEED_TIME
     * @return static
     */
    public function setLowSpeedTime($int)
    {
        return $this->setOption('CURLOPT_LOW_SPEED_TIME', $int, 'int');
    }

    /**
     * CURLOPT_LOW_SPEED_TIME
     * 
     * @return int CURLOPT_LOW_SPEED_TIME
     */
    public function getLowSpeedTime($int)
    {
        return $this->getOption('CURLOPT_LOW_SPEED_TIME');
    }

    /**
     * CURLOPT_LOW_SPEED_TIME
     * 
     * @return static
     */
    public function clearLowSpeedTime($int)
    {
        return $this->clearOption('CURLOPT_LOW_SPEED_TIME');
    }

    /**
     * CURLOPT_MAXCONNECTS
     * The maximum amount of persistent connections that are allowed. When the
     * limit is reached, <strong><code>CURLOPT_CLOSEPOLICY</code></strong> is used
     * to determine which connection to close.
     * 
     * @param int $int CURLOPT_MAXCONNECTS
     * @return static
     */
    public function setMaxconnects($int)
    {
        return $this->setOption('CURLOPT_MAXCONNECTS', $int, 'int');
    }

    /**
     * CURLOPT_MAXCONNECTS
     * 
     * @return int CURLOPT_MAXCONNECTS
     */
    public function getMaxconnects($int)
    {
        return $this->getOption('CURLOPT_MAXCONNECTS');
    }

    /**
     * CURLOPT_MAXCONNECTS
     * 
     * @return static
     */
    public function clearMaxconnects($int)
    {
        return $this->clearOption('CURLOPT_MAXCONNECTS');
    }

    /**
     * CURLOPT_MAXREDIRS
     * The maximum amount of HTTP redirections to follow. Use this option
     * alongside <strong><code>CURLOPT_FOLLOWLOCATION</code></strong>.
     * 
     * @param int $int CURLOPT_MAXREDIRS
     * @return static
     */
    public function setMaxredirs($int)
    {
        return $this->setOption('CURLOPT_MAXREDIRS', $int, 'int');
    }

    /**
     * CURLOPT_MAXREDIRS
     * 
     * @return int CURLOPT_MAXREDIRS
     */
    public function getMaxredirs($int)
    {
        return $this->getOption('CURLOPT_MAXREDIRS');
    }

    /**
     * CURLOPT_MAXREDIRS
     * 
     * @return static
     */
    public function clearMaxredirs($int)
    {
        return $this->clearOption('CURLOPT_MAXREDIRS');
    }

    /**
     * CURLOPT_PORT
     * An alternative port number to connect to.
     * 
     * @param int $int CURLOPT_PORT
     * @return static
     */
    public function setPort($int)
    {
        return $this->setOption('CURLOPT_PORT', $int, 'int');
    }

    /**
     * CURLOPT_PORT
     * 
     * @return int CURLOPT_PORT
     */
    public function getPort($int)
    {
        return $this->getOption('CURLOPT_PORT');
    }

    /**
     * CURLOPT_PORT
     * 
     * @return static
     */
    public function clearPort($int)
    {
        return $this->clearOption('CURLOPT_PORT');
    }

    /**
     * CURLOPT_POSTREDIR
     * A bitmask of 1 (301 Moved Permanently), 2 (302 Found) and 4 (303 See Other)
     * if the HTTP POST method should be maintained when
     * <strong><code>CURLOPT_FOLLOWLOCATION</code></strong> is set and a specific
     * type of redirect occurs.
     * 
     * @param int $int CURLOPT_POSTREDIR
     * @since Added in cURL 7.19.1. Available since PHP 5.3.2.
     * @return static
     */
    public function setPostredir($int)
    {
        return $this->setOption('CURLOPT_POSTREDIR', $int, 'int');
    }

    /**
     * CURLOPT_POSTREDIR
     * 
     * @return int CURLOPT_POSTREDIR
     */
    public function getPostredir($int)
    {
        return $this->getOption('CURLOPT_POSTREDIR');
    }

    /**
     * CURLOPT_POSTREDIR
     * 
     * @return static
     */
    public function clearPostredir($int)
    {
        return $this->clearOption('CURLOPT_POSTREDIR');
    }

    /**
     * CURLOPT_PROTOCOLS
     * <p class="para"> Bitmask of <strong><code>CURLPROTO_*</code></strong>
     * values. If used, this bitmask limits what protocols libcurl may use in the
     * transfer. This allows you to have a libcurl built to support a wide range
     * of protocols but still limit specific transfers to only be allowed to use a
     * subset of them. By default libcurl will accept all protocols it supports.
     * See also <strong><code>CURLOPT_REDIR_PROTOCOLS</code></strong>. </p> <p
     * class="para"> Valid protocol options are: <code
     * class="parameter">CURLPROTO_HTTP</code>, <code
     * class="parameter">CURLPROTO_HTTPS</code>, <code
     * class="parameter">CURLPROTO_FTP</code>, <code
     * class="parameter">CURLPROTO_FTPS</code>, <code
     * class="parameter">CURLPROTO_SCP</code>, <code
     * class="parameter">CURLPROTO_SFTP</code>, <code
     * class="parameter">CURLPROTO_TELNET</code>, <code
     * class="parameter">CURLPROTO_LDAP</code>, <code
     * class="parameter">CURLPROTO_LDAPS</code>, <code
     * class="parameter">CURLPROTO_DICT</code>, <code
     * class="parameter">CURLPROTO_FILE</code>, <code
     * class="parameter">CURLPROTO_TFTP</code>, <code
     * class="parameter">CURLPROTO_ALL</code> </p>
     * 
     * @param int $int CURLOPT_PROTOCOLS
     * @since Added in cURL 7.19.4.
     * @return static
     */
    public function setProtocols($int)
    {
        return $this->setOption('CURLOPT_PROTOCOLS', $int, 'int');
    }

    /**
     * CURLOPT_PROTOCOLS
     * 
     * @return int CURLOPT_PROTOCOLS
     */
    public function getProtocols($int)
    {
        return $this->getOption('CURLOPT_PROTOCOLS');
    }

    /**
     * CURLOPT_PROTOCOLS
     * 
     * @return static
     */
    public function clearProtocols($int)
    {
        return $this->clearOption('CURLOPT_PROTOCOLS');
    }

    /**
     * CURLOPT_PROXYAUTH
     * The HTTP authentication method(s) to use for the proxy connection. Use the
     * same bitmasks as described in
     * <strong><code>CURLOPT_HTTPAUTH</code></strong>. For proxy authentication,
     * only <code class="parameter">CURLAUTH_BASIC</code> and <code
     * class="parameter">CURLAUTH_NTLM</code> are currently supported.
     * 
     * @param int $int CURLOPT_PROXYAUTH
     * @since Added in cURL 7.10.7.
     * @return static
     */
    public function setProxyauth($int)
    {
        return $this->setOption('CURLOPT_PROXYAUTH', $int, 'int');
    }

    /**
     * CURLOPT_PROXYAUTH
     * 
     * @return int CURLOPT_PROXYAUTH
     */
    public function getProxyauth($int)
    {
        return $this->getOption('CURLOPT_PROXYAUTH');
    }

    /**
     * CURLOPT_PROXYAUTH
     * 
     * @return static
     */
    public function clearProxyauth($int)
    {
        return $this->clearOption('CURLOPT_PROXYAUTH');
    }

    /**
     * CURLOPT_PROXYPORT
     * The port number of the proxy to connect to. This port number can also be
     * set in <strong><code>CURLOPT_PROXY</code></strong>.
     * 
     * @param int $int CURLOPT_PROXYPORT
     * @return static
     */
    public function setProxyport($int)
    {
        return $this->setOption('CURLOPT_PROXYPORT', $int, 'int');
    }

    /**
     * CURLOPT_PROXYPORT
     * 
     * @return int CURLOPT_PROXYPORT
     */
    public function getProxyport($int)
    {
        return $this->getOption('CURLOPT_PROXYPORT');
    }

    /**
     * CURLOPT_PROXYPORT
     * 
     * @return static
     */
    public function clearProxyport($int)
    {
        return $this->clearOption('CURLOPT_PROXYPORT');
    }

    /**
     * CURLOPT_PROXYTYPE
     * Either <strong><code>CURLPROXY_HTTP</code></strong> (default),
     * <strong><code>CURLPROXY_SOCKS4</code></strong>,
     * <strong><code>CURLPROXY_SOCKS5</code></strong>,
     * <strong><code>CURLPROXY_SOCKS4A</code></strong> or
     * <strong><code>CURLPROXY_SOCKS5_HOSTNAME</code></strong>.
     * 
     * @param int $int CURLOPT_PROXYTYPE
     * @since Added in cURL 7.10.
     * @return static
     */
    public function setProxytype($int)
    {
        return $this->setOption('CURLOPT_PROXYTYPE', $int, 'int');
    }

    /**
     * CURLOPT_PROXYTYPE
     * 
     * @return int CURLOPT_PROXYTYPE
     */
    public function getProxytype($int)
    {
        return $this->getOption('CURLOPT_PROXYTYPE');
    }

    /**
     * CURLOPT_PROXYTYPE
     * 
     * @return static
     */
    public function clearProxytype($int)
    {
        return $this->clearOption('CURLOPT_PROXYTYPE');
    }

    /**
     * CURLOPT_REDIR_PROTOCOLS
     * Bitmask of <strong><code>CURLPROTO_*</code></strong> values. If used, this
     * bitmask limits what protocols libcurl may use in a transfer that it follows
     * to in a redirect when <strong><code>CURLOPT_FOLLOWLOCATION</code></strong>
     * is enabled. This allows you to limit specific transfers to only be allowed
     * to use a subset of protocols in redirections. By default libcurl will allow
     * all protocols except for FILE and SCP. This is a difference compared to
     * pre-7.19.4 versions which unconditionally would follow to all protocols
     * supported. See also <strong><code>CURLOPT_PROTOCOLS</code></strong> for
     * protocol constant values.
     * 
     * @param int $int CURLOPT_REDIR_PROTOCOLS
     * @since Added in cURL 7.19.4.
     * @return static
     */
    public function setRedirProtocols($int)
    {
        return $this->setOption('CURLOPT_REDIR_PROTOCOLS', $int, 'int');
    }

    /**
     * CURLOPT_REDIR_PROTOCOLS
     * 
     * @return int CURLOPT_REDIR_PROTOCOLS
     */
    public function getRedirProtocols($int)
    {
        return $this->getOption('CURLOPT_REDIR_PROTOCOLS');
    }

    /**
     * CURLOPT_REDIR_PROTOCOLS
     * 
     * @return static
     */
    public function clearRedirProtocols($int)
    {
        return $this->clearOption('CURLOPT_REDIR_PROTOCOLS');
    }

    /**
     * CURLOPT_RESUME_FROM
     * The offset, in bytes, to resume a transfer from.
     * 
     * @param int $int CURLOPT_RESUME_FROM
     * @return static
     */
    public function setResumeFrom($int)
    {
        return $this->setOption('CURLOPT_RESUME_FROM', $int, 'int');
    }

    /**
     * CURLOPT_RESUME_FROM
     * 
     * @return int CURLOPT_RESUME_FROM
     */
    public function getResumeFrom($int)
    {
        return $this->getOption('CURLOPT_RESUME_FROM');
    }

    /**
     * CURLOPT_RESUME_FROM
     * 
     * @return static
     */
    public function clearResumeFrom($int)
    {
        return $this->clearOption('CURLOPT_RESUME_FROM');
    }

    /**
     * CURLOPT_SSL_OPTIONS
     * Set SSL behavior options, which is a bitmask of any of the following
     * constants: <span class="simpara">
     * <strong><code>CURLSSLOPT_ALLOW_BEAST</code></strong>: do not attempt to use
     * any workarounds for a security flaw in the SSL3 and TLS1.0 protocols.
     * </span> <span class="simpara">
     * <strong><code>CURLSSLOPT_NO_REVOKE</code></strong>: disable certificate
     * revocation checks for those SSL backends where such behavior is present.
     * </span>
     * 
     * @param int $int CURLOPT_SSL_OPTIONS
     * @since Added in cURL 7.25.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setSslOptions($int)
    {
        return $this->setOption('CURLOPT_SSL_OPTIONS', $int, 'int');
    }

    /**
     * CURLOPT_SSL_OPTIONS
     * 
     * @return int CURLOPT_SSL_OPTIONS
     */
    public function getSslOptions($int)
    {
        return $this->getOption('CURLOPT_SSL_OPTIONS');
    }

    /**
     * CURLOPT_SSL_OPTIONS
     * 
     * @return static
     */
    public function clearSslOptions($int)
    {
        return $this->clearOption('CURLOPT_SSL_OPTIONS');
    }

    /**
     * CURLOPT_SSL_VERIFYHOST
     * 1 to check the existence of a common name in the SSL peer certificate. 2 to
     * check the existence of a common name and also verify that it matches the
     * hostname provided. In production environments the value of this option
     * should be kept at 2 (default value).
     * 
     * @param int $int CURLOPT_SSL_VERIFYHOST
     * @since Support for value 1 removed in cURL 7.28.1
     * @return static
     */
    public function setSslVerifyhost($int)
    {
        return $this->setOption('CURLOPT_SSL_VERIFYHOST', $int, 'int');
    }

    /**
     * CURLOPT_SSL_VERIFYHOST
     * 
     * @return int CURLOPT_SSL_VERIFYHOST
     */
    public function getSslVerifyhost($int)
    {
        return $this->getOption('CURLOPT_SSL_VERIFYHOST');
    }

    /**
     * CURLOPT_SSL_VERIFYHOST
     * 
     * @return static
     */
    public function clearSslVerifyhost($int)
    {
        return $this->clearOption('CURLOPT_SSL_VERIFYHOST');
    }

    /**
     * CURLOPT_SSLVERSION
     * One of <strong><code>CURL_SSLVERSION_DEFAULT</code></strong> (0),
     * <strong><code>CURL_SSLVERSION_TLSv1</code></strong> (1),
     * <strong><code>CURL_SSLVERSION_SSLv2</code></strong> (2),
     * <strong><code>CURL_SSLVERSION_SSLv3</code></strong> (3),
     * <strong><code>CURL_SSLVERSION_TLSv1_0</code></strong> (4),
     * <strong><code>CURL_SSLVERSION_TLSv1_1</code></strong> (5) or
     * <strong><code>CURL_SSLVERSION_TLSv1_2</code></strong> (6). <blockquote
     * class="note"><p><strong class="note">Note</strong>: </p><p class="para">
     * Your best bet is to not set this and let it use the default. Setting it to
     * 2 or 3 is very dangerous given the known vulnerabilities in SSLv2 and
     * SSLv3. </p> </blockquote>
     * 
     * @param int $int CURLOPT_SSLVERSION
     * @return static
     */
    public function setSslversion($int)
    {
        return $this->setOption('CURLOPT_SSLVERSION', $int, 'int');
    }

    /**
     * CURLOPT_SSLVERSION
     * 
     * @return int CURLOPT_SSLVERSION
     */
    public function getSslversion($int)
    {
        return $this->getOption('CURLOPT_SSLVERSION');
    }

    /**
     * CURLOPT_SSLVERSION
     * 
     * @return static
     */
    public function clearSslversion($int)
    {
        return $this->clearOption('CURLOPT_SSLVERSION');
    }

    /**
     * CURLOPT_STREAM_WEIGHT
     * Set the numerical stream weight (a number between 1 and 256).
     * 
     * @param int $int CURLOPT_STREAM_WEIGHT
     * @since Added in cURL 7.46.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setStreamWeight($int)
    {
        return $this->setOption('CURLOPT_STREAM_WEIGHT', $int, 'int');
    }

    /**
     * CURLOPT_STREAM_WEIGHT
     * 
     * @return int CURLOPT_STREAM_WEIGHT
     */
    public function getStreamWeight($int)
    {
        return $this->getOption('CURLOPT_STREAM_WEIGHT');
    }

    /**
     * CURLOPT_STREAM_WEIGHT
     * 
     * @return static
     */
    public function clearStreamWeight($int)
    {
        return $this->clearOption('CURLOPT_STREAM_WEIGHT');
    }

    /**
     * CURLOPT_TIMECONDITION
     * How <strong><code>CURLOPT_TIMEVALUE</code></strong> is treated. Use <code
     * class="parameter">CURL_TIMECOND_IFMODSINCE</code> to return the page only
     * if it has been modified since the time specified in
     * <strong><code>CURLOPT_TIMEVALUE</code></strong>. If it hasn't been
     * modified, a <em>"304 Not Modified"</em> header will be returned assuming
     * <strong><code>CURLOPT_HEADER</code></strong> is
     * <strong><code>TRUE</code></strong>. Use <code
     * class="parameter">CURL_TIMECOND_IFUNMODSINCE</code> for the reverse effect.
     * <code class="parameter">CURL_TIMECOND_IFMODSINCE</code> is the default.
     * 
     * @param int $int CURLOPT_TIMECONDITION
     * @return static
     */
    public function setTimecondition($int)
    {
        return $this->setOption('CURLOPT_TIMECONDITION', $int, 'int');
    }

    /**
     * CURLOPT_TIMECONDITION
     * 
     * @return int CURLOPT_TIMECONDITION
     */
    public function getTimecondition($int)
    {
        return $this->getOption('CURLOPT_TIMECONDITION');
    }

    /**
     * CURLOPT_TIMECONDITION
     * 
     * @return static
     */
    public function clearTimecondition($int)
    {
        return $this->clearOption('CURLOPT_TIMECONDITION');
    }

    /**
     * CURLOPT_TIMEOUT
     * The maximum number of seconds to allow cURL functions to execute.
     * 
     * @param int $int CURLOPT_TIMEOUT
     * @return static
     */
    public function setTimeout($int)
    {
        return $this->setOption('CURLOPT_TIMEOUT', $int, 'int');
    }

    /**
     * CURLOPT_TIMEOUT
     * 
     * @return int CURLOPT_TIMEOUT
     */
    public function getTimeout($int)
    {
        return $this->getOption('CURLOPT_TIMEOUT');
    }

    /**
     * CURLOPT_TIMEOUT
     * 
     * @return static
     */
    public function clearTimeout($int)
    {
        return $this->clearOption('CURLOPT_TIMEOUT');
    }

    /**
     * CURLOPT_TIMEOUT_MS
     * The maximum number of milliseconds to allow cURL functions to execute. If
     * libcurl is built to use the standard system name resolver, that portion of
     * the connect will still use full-second resolution for timeouts with a
     * minimum timeout allowed of one second.
     * 
     * @param int $int CURLOPT_TIMEOUT_MS
     * @since Added in cURL 7.16.2. Available since PHP 5.2.3.
     * @return static
     */
    public function setTimeoutMs($int)
    {
        return $this->setOption('CURLOPT_TIMEOUT_MS', $int, 'int');
    }

    /**
     * CURLOPT_TIMEOUT_MS
     * 
     * @return int CURLOPT_TIMEOUT_MS
     */
    public function getTimeoutMs($int)
    {
        return $this->getOption('CURLOPT_TIMEOUT_MS');
    }

    /**
     * CURLOPT_TIMEOUT_MS
     * 
     * @return static
     */
    public function clearTimeoutMs($int)
    {
        return $this->clearOption('CURLOPT_TIMEOUT_MS');
    }

    /**
     * CURLOPT_TIMEVALUE
     * The time in seconds since January 1st, 1970. The time will be used by
     * <strong><code>CURLOPT_TIMECONDITION</code></strong>. By default, <code
     * class="parameter">CURL_TIMECOND_IFMODSINCE</code> is used.
     * 
     * @param int $int CURLOPT_TIMEVALUE
     * @return static
     */
    public function setTimevalue($int)
    {
        return $this->setOption('CURLOPT_TIMEVALUE', $int, 'int');
    }

    /**
     * CURLOPT_TIMEVALUE
     * 
     * @return int CURLOPT_TIMEVALUE
     */
    public function getTimevalue($int)
    {
        return $this->getOption('CURLOPT_TIMEVALUE');
    }

    /**
     * CURLOPT_TIMEVALUE
     * 
     * @return static
     */
    public function clearTimevalue($int)
    {
        return $this->clearOption('CURLOPT_TIMEVALUE');
    }

    /**
     * CURLOPT_MAX_RECV_SPEED_LARGE
     * If a download exceeds this speed (counted in bytes per second) on
     * cumulative average during the transfer, the transfer will pause to keep the
     * average rate less than or equal to the parameter value. Defaults to
     * unlimited speed.
     * 
     * @param int $int CURLOPT_MAX_RECV_SPEED_LARGE
     * @since Added in cURL 7.15.5. Available since PHP 5.4.0.
     * @return static
     */
    public function setMaxRecvSpeedLarge($int)
    {
        return $this->setOption('CURLOPT_MAX_RECV_SPEED_LARGE', $int, 'int');
    }

    /**
     * CURLOPT_MAX_RECV_SPEED_LARGE
     * 
     * @return int CURLOPT_MAX_RECV_SPEED_LARGE
     */
    public function getMaxRecvSpeedLarge($int)
    {
        return $this->getOption('CURLOPT_MAX_RECV_SPEED_LARGE');
    }

    /**
     * CURLOPT_MAX_RECV_SPEED_LARGE
     * 
     * @return static
     */
    public function clearMaxRecvSpeedLarge($int)
    {
        return $this->clearOption('CURLOPT_MAX_RECV_SPEED_LARGE');
    }

    /**
     * CURLOPT_MAX_SEND_SPEED_LARGE
     * If an upload exceeds this speed (counted in bytes per second) on cumulative
     * average during the transfer, the transfer will pause to keep the average
     * rate less than or equal to the parameter value. Defaults to unlimited
     * speed.
     * 
     * @param int $int CURLOPT_MAX_SEND_SPEED_LARGE
     * @since Added in cURL 7.15.5. Available since PHP 5.4.0.
     * @return static
     */
    public function setMaxSendSpeedLarge($int)
    {
        return $this->setOption('CURLOPT_MAX_SEND_SPEED_LARGE', $int, 'int');
    }

    /**
     * CURLOPT_MAX_SEND_SPEED_LARGE
     * 
     * @return int CURLOPT_MAX_SEND_SPEED_LARGE
     */
    public function getMaxSendSpeedLarge($int)
    {
        return $this->getOption('CURLOPT_MAX_SEND_SPEED_LARGE');
    }

    /**
     * CURLOPT_MAX_SEND_SPEED_LARGE
     * 
     * @return static
     */
    public function clearMaxSendSpeedLarge($int)
    {
        return $this->clearOption('CURLOPT_MAX_SEND_SPEED_LARGE');
    }

    /**
     * CURLOPT_SSH_AUTH_TYPES
     * A bitmask consisting of one or more of
     * <strong><code>CURLSSH_AUTH_PUBLICKEY</code></strong>,
     * <strong><code>CURLSSH_AUTH_PASSWORD</code></strong>,
     * <strong><code>CURLSSH_AUTH_HOST</code></strong>,
     * <strong><code>CURLSSH_AUTH_KEYBOARD</code></strong>. Set to
     * <strong><code>CURLSSH_AUTH_ANY</code></strong> to let libcurl pick one.
     * 
     * @param int $int CURLOPT_SSH_AUTH_TYPES
     * @since Added in cURL 7.16.1.
     * @return static
     */
    public function setSshAuthTypes($int)
    {
        return $this->setOption('CURLOPT_SSH_AUTH_TYPES', $int, 'int');
    }

    /**
     * CURLOPT_SSH_AUTH_TYPES
     * 
     * @return int CURLOPT_SSH_AUTH_TYPES
     */
    public function getSshAuthTypes($int)
    {
        return $this->getOption('CURLOPT_SSH_AUTH_TYPES');
    }

    /**
     * CURLOPT_SSH_AUTH_TYPES
     * 
     * @return static
     */
    public function clearSshAuthTypes($int)
    {
        return $this->clearOption('CURLOPT_SSH_AUTH_TYPES');
    }

    /**
     * CURLOPT_IPRESOLVE
     * Allows an application to select what kind of IP addresses to use when
     * resolving host names. This is only interesting when using host names that
     * resolve addresses using more than one version of IP, possible values are
     * <strong><code>CURL_IPRESOLVE_WHATEVER</code></strong>,
     * <strong><code>CURL_IPRESOLVE_V4</code></strong>,
     * <strong><code>CURL_IPRESOLVE_V6</code></strong>, by default
     * <strong><code>CURL_IPRESOLVE_WHATEVER</code></strong>.
     * 
     * @param int $int CURLOPT_IPRESOLVE
     * @since Added in cURL 7.10.8.
     * @return static
     */
    public function setIpresolve($int)
    {
        return $this->setOption('CURLOPT_IPRESOLVE', $int, 'int');
    }

    /**
     * CURLOPT_IPRESOLVE
     * 
     * @return int CURLOPT_IPRESOLVE
     */
    public function getIpresolve($int)
    {
        return $this->getOption('CURLOPT_IPRESOLVE');
    }

    /**
     * CURLOPT_IPRESOLVE
     * 
     * @return static
     */
    public function clearIpresolve($int)
    {
        return $this->clearOption('CURLOPT_IPRESOLVE');
    }

    /**
     * CURLOPT_FTP_FILEMETHOD
     * Tell curl which method to use to reach a file on a FTP(S) server. Possible
     * values are <strong><code>CURLFTPMETHOD_MULTICWD</code></strong>,
     * <strong><code>CURLFTPMETHOD_NOCWD</code></strong> and
     * <strong><code>CURLFTPMETHOD_SINGLECWD</code></strong>.
     * 
     * @param int $int CURLOPT_FTP_FILEMETHOD
     * @since Added in cURL 7.15.1. Available since PHP 5.3.0.
     * @return static
     */
    public function setFtpFilemethod($int)
    {
        return $this->setOption('CURLOPT_FTP_FILEMETHOD', $int, 'int');
    }

    /**
     * CURLOPT_FTP_FILEMETHOD
     * 
     * @return int CURLOPT_FTP_FILEMETHOD
     */
    public function getFtpFilemethod($int)
    {
        return $this->getOption('CURLOPT_FTP_FILEMETHOD');
    }

    /**
     * CURLOPT_FTP_FILEMETHOD
     * 
     * @return static
     */
    public function clearFtpFilemethod($int)
    {
        return $this->clearOption('CURLOPT_FTP_FILEMETHOD');
    }

    /**
     * CURLOPT_CAINFO
     * The name of a file holding one or more certificates to verify the peer
     * with. This only makes sense when used in combination with
     * <strong><code>CURLOPT_SSL_VERIFYPEER</code></strong>.
     * 
     * @param string $string CURLOPT_CAINFO
     * @since Might require an absolute path.
     * @return static
     */
    public function setCainfo($string)
    {
        return $this->setOption('CURLOPT_CAINFO', $string, 'string');
    }

    /**
     * CURLOPT_CAINFO
     * 
     * @return string CURLOPT_CAINFO
     */
    public function getCainfo($string)
    {
        return $this->getOption('CURLOPT_CAINFO');
    }

    /**
     * CURLOPT_CAINFO
     * 
     * @return static
     */
    public function clearCainfo($string)
    {
        return $this->clearOption('CURLOPT_CAINFO');
    }

    /**
     * CURLOPT_CAPATH
     * A directory that holds multiple CA certificates. Use this option alongside
     * <strong><code>CURLOPT_SSL_VERIFYPEER</code></strong>.
     * 
     * @param string $string CURLOPT_CAPATH
     * @return static
     */
    public function setCapath($string)
    {
        return $this->setOption('CURLOPT_CAPATH', $string, 'string');
    }

    /**
     * CURLOPT_CAPATH
     * 
     * @return string CURLOPT_CAPATH
     */
    public function getCapath($string)
    {
        return $this->getOption('CURLOPT_CAPATH');
    }

    /**
     * CURLOPT_CAPATH
     * 
     * @return static
     */
    public function clearCapath($string)
    {
        return $this->clearOption('CURLOPT_CAPATH');
    }

    /**
     * CURLOPT_COOKIE
     * The contents of the <em>"Cookie: "</em> header to be used in the HTTP
     * request. Note that multiple cookies are separated with a semicolon followed
     * by a space (e.g., "<em>fruit=apple; colour=red</em>")
     * 
     * @param string $string CURLOPT_COOKIE
     * @return static
     */
    public function setCookie($string)
    {
        return $this->setOption('CURLOPT_COOKIE', $string, 'string');
    }

    /**
     * CURLOPT_COOKIE
     * 
     * @return string CURLOPT_COOKIE
     */
    public function getCookie($string)
    {
        return $this->getOption('CURLOPT_COOKIE');
    }

    /**
     * CURLOPT_COOKIE
     * 
     * @return static
     */
    public function clearCookie($string)
    {
        return $this->clearOption('CURLOPT_COOKIE');
    }

    /**
     * CURLOPT_COOKIEFILE
     * The name of the file containing the cookie data. The cookie file can be in
     * Netscape format, or just plain HTTP-style headers dumped into a file. If
     * the name is an empty string, no cookies are loaded, but cookie handling is
     * still enabled.
     * 
     * @param string $string CURLOPT_COOKIEFILE
     * @return static
     */
    public function setCookiefile($string)
    {
        return $this->setOption('CURLOPT_COOKIEFILE', $string, 'string');
    }

    /**
     * CURLOPT_COOKIEFILE
     * 
     * @return string CURLOPT_COOKIEFILE
     */
    public function getCookiefile($string)
    {
        return $this->getOption('CURLOPT_COOKIEFILE');
    }

    /**
     * CURLOPT_COOKIEFILE
     * 
     * @return static
     */
    public function clearCookiefile($string)
    {
        return $this->clearOption('CURLOPT_COOKIEFILE');
    }

    /**
     * CURLOPT_COOKIEJAR
     * The name of a file to save all internal cookies to when the handle is
     * closed, e.g. after a call to curl_close.
     * 
     * @param string $string CURLOPT_COOKIEJAR
     * @return static
     */
    public function setCookiejar($string)
    {
        return $this->setOption('CURLOPT_COOKIEJAR', $string, 'string');
    }

    /**
     * CURLOPT_COOKIEJAR
     * 
     * @return string CURLOPT_COOKIEJAR
     */
    public function getCookiejar($string)
    {
        return $this->getOption('CURLOPT_COOKIEJAR');
    }

    /**
     * CURLOPT_COOKIEJAR
     * 
     * @return static
     */
    public function clearCookiejar($string)
    {
        return $this->clearOption('CURLOPT_COOKIEJAR');
    }

    /**
     * CURLOPT_CUSTOMREQUEST
     * <p class="para"> A custom request method to use instead of <em>"GET"</em>
     * or <em>"HEAD"</em> when doing a HTTP request. This is useful for doing
     * <em>"DELETE"</em> or other, more obscure HTTP requests. Valid values are
     * things like <em>"GET"</em>, <em>"POST"</em>, <em>"CONNECT"</em> and so on;
     * i.e. Do not enter a whole HTTP request line here. For instance, entering
     * <em>"GET /index.html HTTP/1.0\r\n\r\n"</em> would be incorrect.
     * </p><blockquote class="note"><p><strong class="note">Note</strong>: </p><p
     * class="para"> Don't do this without making sure the server supports the
     * custom request method first. </p> </blockquote>
     * 
     * @param string $string CURLOPT_CUSTOMREQUEST
     * @return static
     */
    public function setCustomrequest($string)
    {
        return $this->setOption('CURLOPT_CUSTOMREQUEST', $string, 'string');
    }

    /**
     * CURLOPT_CUSTOMREQUEST
     * 
     * @return string CURLOPT_CUSTOMREQUEST
     */
    public function getCustomrequest($string)
    {
        return $this->getOption('CURLOPT_CUSTOMREQUEST');
    }

    /**
     * CURLOPT_CUSTOMREQUEST
     * 
     * @return static
     */
    public function clearCustomrequest($string)
    {
        return $this->clearOption('CURLOPT_CUSTOMREQUEST');
    }

    /**
     * CURLOPT_DEFAULT_PROTOCOL
     * <p class="para"> The default protocol to use if the URL is missing a scheme
     * name. </p>
     * 
     * @param string $string CURLOPT_DEFAULT_PROTOCOL
     * @since Added in cURL 7.45.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setDefaultProtocol($string)
    {
        return $this->setOption('CURLOPT_DEFAULT_PROTOCOL', $string, 'string');
    }

    /**
     * CURLOPT_DEFAULT_PROTOCOL
     * 
     * @return string CURLOPT_DEFAULT_PROTOCOL
     */
    public function getDefaultProtocol($string)
    {
        return $this->getOption('CURLOPT_DEFAULT_PROTOCOL');
    }

    /**
     * CURLOPT_DEFAULT_PROTOCOL
     * 
     * @return static
     */
    public function clearDefaultProtocol($string)
    {
        return $this->clearOption('CURLOPT_DEFAULT_PROTOCOL');
    }

    /**
     * CURLOPT_DNS_INTERFACE
     * <p class="para"> Set the name of the network interface that the DNS
     * resolver should bind to. This must be an interface name (not an address).
     * </p>
     * 
     * @param string $string CURLOPT_DNS_INTERFACE
     * @since Added in cURL 7.33.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setDnsInterface($string)
    {
        return $this->setOption('CURLOPT_DNS_INTERFACE', $string, 'string');
    }

    /**
     * CURLOPT_DNS_INTERFACE
     * 
     * @return string CURLOPT_DNS_INTERFACE
     */
    public function getDnsInterface($string)
    {
        return $this->getOption('CURLOPT_DNS_INTERFACE');
    }

    /**
     * CURLOPT_DNS_INTERFACE
     * 
     * @return static
     */
    public function clearDnsInterface($string)
    {
        return $this->clearOption('CURLOPT_DNS_INTERFACE');
    }

    /**
     * CURLOPT_DNS_LOCAL_IP4
     * <p class="para"> Set the local IPv4 address that the resolver should bind
     * to. The argument should contain a single numerical IPv4 address as a
     * string. </p>
     * 
     * @param string $string CURLOPT_DNS_LOCAL_IP4
     * @since Added in cURL 7.33.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setDnsLocalIp4($string)
    {
        return $this->setOption('CURLOPT_DNS_LOCAL_IP4', $string, 'string');
    }

    /**
     * CURLOPT_DNS_LOCAL_IP4
     * 
     * @return string CURLOPT_DNS_LOCAL_IP4
     */
    public function getDnsLocalIp4($string)
    {
        return $this->getOption('CURLOPT_DNS_LOCAL_IP4');
    }

    /**
     * CURLOPT_DNS_LOCAL_IP4
     * 
     * @return static
     */
    public function clearDnsLocalIp4($string)
    {
        return $this->clearOption('CURLOPT_DNS_LOCAL_IP4');
    }

    /**
     * CURLOPT_DNS_LOCAL_IP6
     * <p class="para"> Set the local IPv6 address that the resolver should bind
     * to. The argument should contain a single numerical IPv6 address as a
     * string. </p>
     * 
     * @param string $string CURLOPT_DNS_LOCAL_IP6
     * @since Added in cURL 7.33.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setDnsLocalIp6($string)
    {
        return $this->setOption('CURLOPT_DNS_LOCAL_IP6', $string, 'string');
    }

    /**
     * CURLOPT_DNS_LOCAL_IP6
     * 
     * @return string CURLOPT_DNS_LOCAL_IP6
     */
    public function getDnsLocalIp6($string)
    {
        return $this->getOption('CURLOPT_DNS_LOCAL_IP6');
    }

    /**
     * CURLOPT_DNS_LOCAL_IP6
     * 
     * @return static
     */
    public function clearDnsLocalIp6($string)
    {
        return $this->clearOption('CURLOPT_DNS_LOCAL_IP6');
    }

    /**
     * CURLOPT_EGDSOCKET
     * Like <strong><code>CURLOPT_RANDOM_FILE</code></strong>, except a filename
     * to an Entropy Gathering Daemon socket.
     * 
     * @param string $string CURLOPT_EGDSOCKET
     * @return static
     */
    public function setEgdsocket($string)
    {
        return $this->setOption('CURLOPT_EGDSOCKET', $string, 'string');
    }

    /**
     * CURLOPT_EGDSOCKET
     * 
     * @return string CURLOPT_EGDSOCKET
     */
    public function getEgdsocket($string)
    {
        return $this->getOption('CURLOPT_EGDSOCKET');
    }

    /**
     * CURLOPT_EGDSOCKET
     * 
     * @return static
     */
    public function clearEgdsocket($string)
    {
        return $this->clearOption('CURLOPT_EGDSOCKET');
    }

    /**
     * CURLOPT_ENCODING
     * The contents of the <em>"Accept-Encoding: "</em> header. This enables
     * decoding of the response. Supported encodings are <em>"identity"</em>,
     * <em>"deflate"</em>, and <em>"gzip"</em>. If an empty string, <em>""</em>,
     * is set, a header containing all supported encoding types is sent.
     * 
     * @param string $string CURLOPT_ENCODING
     * @since Added in cURL 7.10.
     * @return static
     */
    public function setEncoding($string)
    {
        return $this->setOption('CURLOPT_ENCODING', $string, 'string');
    }

    /**
     * CURLOPT_ENCODING
     * 
     * @return string CURLOPT_ENCODING
     */
    public function getEncoding($string)
    {
        return $this->getOption('CURLOPT_ENCODING');
    }

    /**
     * CURLOPT_ENCODING
     * 
     * @return static
     */
    public function clearEncoding($string)
    {
        return $this->clearOption('CURLOPT_ENCODING');
    }

    /**
     * CURLOPT_FTPPORT
     * The value which will be used to get the IP address to use for the FTP
     * "PORT" instruction. The "PORT" instruction tells the remote server to
     * connect to our specified IP address. The string may be a plain IP address,
     * a hostname, a network interface name (under Unix), or just a plain ' - ' to
     * use the systems default IP address.
     * 
     * @param string $string CURLOPT_FTPPORT
     * @return static
     */
    public function setFtpport($string)
    {
        return $this->setOption('CURLOPT_FTPPORT', $string, 'string');
    }

    /**
     * CURLOPT_FTPPORT
     * 
     * @return string CURLOPT_FTPPORT
     */
    public function getFtpport($string)
    {
        return $this->getOption('CURLOPT_FTPPORT');
    }

    /**
     * CURLOPT_FTPPORT
     * 
     * @return static
     */
    public function clearFtpport($string)
    {
        return $this->clearOption('CURLOPT_FTPPORT');
    }

    /**
     * CURLOPT_INTERFACE
     * The name of the outgoing network interface to use. This can be an interface
     * name, an IP address or a host name.
     * 
     * @param string $string CURLOPT_INTERFACE
     * @return static
     */
    public function setInterface($string)
    {
        return $this->setOption('CURLOPT_INTERFACE', $string, 'string');
    }

    /**
     * CURLOPT_INTERFACE
     * 
     * @return string CURLOPT_INTERFACE
     */
    public function getInterface($string)
    {
        return $this->getOption('CURLOPT_INTERFACE');
    }

    /**
     * CURLOPT_INTERFACE
     * 
     * @return static
     */
    public function clearInterface($string)
    {
        return $this->clearOption('CURLOPT_INTERFACE');
    }

    /**
     * CURLOPT_KEYPASSWD
     * The password required to use the
     * <strong><code>CURLOPT_SSLKEY</code></strong> or
     * <strong><code>CURLOPT_SSH_PRIVATE_KEYFILE</code></strong> private key.
     * 
     * @param string $string CURLOPT_KEYPASSWD
     * @since Added in cURL 7.16.1.
     * @return static
     */
    public function setKeypasswd($string)
    {
        return $this->setOption('CURLOPT_KEYPASSWD', $string, 'string');
    }

    /**
     * CURLOPT_KEYPASSWD
     * 
     * @return string CURLOPT_KEYPASSWD
     */
    public function getKeypasswd($string)
    {
        return $this->getOption('CURLOPT_KEYPASSWD');
    }

    /**
     * CURLOPT_KEYPASSWD
     * 
     * @return static
     */
    public function clearKeypasswd($string)
    {
        return $this->clearOption('CURLOPT_KEYPASSWD');
    }

    /**
     * CURLOPT_KRB4LEVEL
     * The KRB4 (Kerberos 4) security level. Any of the following values (in order
     * from least to most powerful) are valid: <em>"clear"</em>, <em>"safe"</em>,
     * <em>"confidential"</em>, <em>"private".</em>. If the string does not match
     * one of these, <em>"private"</em> is used. Setting this option to
     * <strong><code>NULL</code></strong> will disable KRB4 security. Currently
     * KRB4 security only works with FTP transactions.
     * 
     * @param string $string CURLOPT_KRB4LEVEL
     * @return static
     */
    public function setKrb4level($string)
    {
        return $this->setOption('CURLOPT_KRB4LEVEL', $string, 'string');
    }

    /**
     * CURLOPT_KRB4LEVEL
     * 
     * @return string CURLOPT_KRB4LEVEL
     */
    public function getKrb4level($string)
    {
        return $this->getOption('CURLOPT_KRB4LEVEL');
    }

    /**
     * CURLOPT_KRB4LEVEL
     * 
     * @return static
     */
    public function clearKrb4level($string)
    {
        return $this->clearOption('CURLOPT_KRB4LEVEL');
    }

    /**
     * CURLOPT_LOGIN_OPTIONS
     * Can be used to set protocol specific login options, such as the preferred
     * authentication mechanism via "AUTH=NTLM" or "AUTH=*", and should be used in
     * conjunction with the <strong><code>CURLOPT_USERNAME</code></strong> option.
     * 
     * @param string $string CURLOPT_LOGIN_OPTIONS
     * @since Added in cURL 7.34.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setLoginOptions($string)
    {
        return $this->setOption('CURLOPT_LOGIN_OPTIONS', $string, 'string');
    }

    /**
     * CURLOPT_LOGIN_OPTIONS
     * 
     * @return string CURLOPT_LOGIN_OPTIONS
     */
    public function getLoginOptions($string)
    {
        return $this->getOption('CURLOPT_LOGIN_OPTIONS');
    }

    /**
     * CURLOPT_LOGIN_OPTIONS
     * 
     * @return static
     */
    public function clearLoginOptions($string)
    {
        return $this->clearOption('CURLOPT_LOGIN_OPTIONS');
    }

    /**
     * CURLOPT_PINNEDPUBLICKEY
     * Set the pinned public key. The string can be the file name of your pinned
     * public key. The file format expected is "PEM" or "DER". The string can also
     * be any number of base64 encoded sha256 hashes preceded by "sha256//" and
     * separated by ";".
     * 
     * @param string $string CURLOPT_PINNEDPUBLICKEY
     * @since Added in cURL 7.39.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setPinnedpublickey($string)
    {
        return $this->setOption('CURLOPT_PINNEDPUBLICKEY', $string, 'string');
    }

    /**
     * CURLOPT_PINNEDPUBLICKEY
     * 
     * @return string CURLOPT_PINNEDPUBLICKEY
     */
    public function getPinnedpublickey($string)
    {
        return $this->getOption('CURLOPT_PINNEDPUBLICKEY');
    }

    /**
     * CURLOPT_PINNEDPUBLICKEY
     * 
     * @return static
     */
    public function clearPinnedpublickey($string)
    {
        return $this->clearOption('CURLOPT_PINNEDPUBLICKEY');
    }

    /**
     * CURLOPT_POSTFIELDS
     * <span class="simpara"> The full data to post in a HTTP "POST" operation. To
     * post a file, prepend a filename with <em>@</em> and use the full path. The
     * filetype can be explicitly specified by following the filename with the
     * type in the format '<em>;type=mimetype</em>'. This parameter can either be
     * passed as a urlencoded string like
     * '<em>para1=val1&amp;para2=val2&amp;...</em>' or as an array with the field
     * name as key and field data as value. If <code
     * class="parameter">value</code> is an array, the <em>Content-Type</em>
     * header will be set to <em>multipart/form-data</em>. </span> <span
     * class="simpara"> As of PHP 5.2.0, <code class="parameter">value</code> must
     * be an array if files are passed to this option with the <em>@</em> prefix.
     * </span> <span class="simpara"> As of PHP 5.5.0, the <em>@</em> prefix is
     * deprecated and files can be sent using <a href="class.curlfile.php"
     * class="classname">CURLFile</a>. The <em>@</em> prefix can be disabled for
     * safe passing of values beginning with <em>@</em> by setting the
     * <strong><code>CURLOPT_SAFE_UPLOAD</code></strong> option to
     * <strong><code>TRUE</code></strong>. </span>
     * 
     * @param string $string CURLOPT_POSTFIELDS
     * @return static
     */
    public function setPostfields($string)
    {
        return $this->setOption('CURLOPT_POSTFIELDS', $string, 'mixed');
    }

    /**
     * CURLOPT_POSTFIELDS
     * 
     * @return string CURLOPT_POSTFIELDS
     */
    public function getPostfields($string)
    {
        return $this->getOption('CURLOPT_POSTFIELDS');
    }

    /**
     * CURLOPT_POSTFIELDS
     * 
     * @return static
     */
    public function clearPostfields($string)
    {
        return $this->clearOption('CURLOPT_POSTFIELDS');
    }

    /**
     * CURLOPT_PRIVATE
     * Any data that should be associated with this cURL handle. This data can
     * subsequently be retrieved with the
     * <strong><code>CURLINFO_PRIVATE</code></strong> option of <span
     * class="function"><a href="function.curl-getinfo.php"
     * class="function">curl_getinfo()</a></span>. cURL does nothing with this
     * data. When using a cURL multi handle, this private data is typically a
     * unique key to identify a standard cURL handle.
     * 
     * @param string $string CURLOPT_PRIVATE
     * @since Added in cURL 7.10.3.
     * @return static
     */
    public function setPrivate($string)
    {
        return $this->setOption('CURLOPT_PRIVATE', $string, 'string');
    }

    /**
     * CURLOPT_PRIVATE
     * 
     * @return string CURLOPT_PRIVATE
     */
    public function getPrivate($string)
    {
        return $this->getOption('CURLOPT_PRIVATE');
    }

    /**
     * CURLOPT_PRIVATE
     * 
     * @return static
     */
    public function clearPrivate($string)
    {
        return $this->clearOption('CURLOPT_PRIVATE');
    }

    /**
     * CURLOPT_PROXY
     * The HTTP proxy to tunnel requests through.
     * 
     * @param string $string CURLOPT_PROXY
     * @return static
     */
    public function setProxy($string)
    {
        return $this->setOption('CURLOPT_PROXY', $string, 'string');
    }

    /**
     * CURLOPT_PROXY
     * 
     * @return string CURLOPT_PROXY
     */
    public function getProxy($string)
    {
        return $this->getOption('CURLOPT_PROXY');
    }

    /**
     * CURLOPT_PROXY
     * 
     * @return static
     */
    public function clearProxy($string)
    {
        return $this->clearOption('CURLOPT_PROXY');
    }

    /**
     * CURLOPT_PROXY_SERVICE_NAME
     * The proxy authentication service name.
     * 
     * @param string $string CURLOPT_PROXY_SERVICE_NAME
     * @since Added in cURL 7.34.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setProxyServiceName($string)
    {
        return $this->setOption('CURLOPT_PROXY_SERVICE_NAME', $string, 'string');
    }

    /**
     * CURLOPT_PROXY_SERVICE_NAME
     * 
     * @return string CURLOPT_PROXY_SERVICE_NAME
     */
    public function getProxyServiceName($string)
    {
        return $this->getOption('CURLOPT_PROXY_SERVICE_NAME');
    }

    /**
     * CURLOPT_PROXY_SERVICE_NAME
     * 
     * @return static
     */
    public function clearProxyServiceName($string)
    {
        return $this->clearOption('CURLOPT_PROXY_SERVICE_NAME');
    }

    /**
     * CURLOPT_PROXYUSERPWD
     * A username and password formatted as <em>"[username]:[password]"</em> to
     * use for the connection to the proxy.
     * 
     * @param string $string CURLOPT_PROXYUSERPWD
     * @return static
     */
    public function setProxyuserpwd($string)
    {
        return $this->setOption('CURLOPT_PROXYUSERPWD', $string, 'string');
    }

    /**
     * CURLOPT_PROXYUSERPWD
     * 
     * @return string CURLOPT_PROXYUSERPWD
     */
    public function getProxyuserpwd($string)
    {
        return $this->getOption('CURLOPT_PROXYUSERPWD');
    }

    /**
     * CURLOPT_PROXYUSERPWD
     * 
     * @return static
     */
    public function clearProxyuserpwd($string)
    {
        return $this->clearOption('CURLOPT_PROXYUSERPWD');
    }

    /**
     * CURLOPT_RANDOM_FILE
     * A filename to be used to seed the random number generator for SSL.
     * 
     * @param string $string CURLOPT_RANDOM_FILE
     * @return static
     */
    public function setRandomFile($string)
    {
        return $this->setOption('CURLOPT_RANDOM_FILE', $string, 'string');
    }

    /**
     * CURLOPT_RANDOM_FILE
     * 
     * @return string CURLOPT_RANDOM_FILE
     */
    public function getRandomFile($string)
    {
        return $this->getOption('CURLOPT_RANDOM_FILE');
    }

    /**
     * CURLOPT_RANDOM_FILE
     * 
     * @return static
     */
    public function clearRandomFile($string)
    {
        return $this->clearOption('CURLOPT_RANDOM_FILE');
    }

    /**
     * CURLOPT_RANGE
     * Range(s) of data to retrieve in the format <em>"X-Y"</em> where X or Y are
     * optional. HTTP transfers also support several intervals, separated with
     * commas in the format <em>"X-Y,N-M"</em>.
     * 
     * @param string $string CURLOPT_RANGE
     * @return static
     */
    public function setRange($string)
    {
        return $this->setOption('CURLOPT_RANGE', $string, 'string');
    }

    /**
     * CURLOPT_RANGE
     * 
     * @return string CURLOPT_RANGE
     */
    public function getRange($string)
    {
        return $this->getOption('CURLOPT_RANGE');
    }

    /**
     * CURLOPT_RANGE
     * 
     * @return static
     */
    public function clearRange($string)
    {
        return $this->clearOption('CURLOPT_RANGE');
    }

    /**
     * CURLOPT_REFERER
     * The contents of the <em>"Referer: "</em> header to be used in a HTTP
     * request.
     * 
     * @param string $string CURLOPT_REFERER
     * @return static
     */
    public function setReferer($string)
    {
        return $this->setOption('CURLOPT_REFERER', $string, 'string');
    }

    /**
     * CURLOPT_REFERER
     * 
     * @return string CURLOPT_REFERER
     */
    public function getReferer($string)
    {
        return $this->getOption('CURLOPT_REFERER');
    }

    /**
     * CURLOPT_REFERER
     * 
     * @return static
     */
    public function clearReferer($string)
    {
        return $this->clearOption('CURLOPT_REFERER');
    }

    /**
     * CURLOPT_SERVICE_NAME
     * The authentication service name.
     * 
     * @param string $string CURLOPT_SERVICE_NAME
     * @since Added in cURL 7.43.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setServiceName($string)
    {
        return $this->setOption('CURLOPT_SERVICE_NAME', $string, 'string');
    }

    /**
     * CURLOPT_SERVICE_NAME
     * 
     * @return string CURLOPT_SERVICE_NAME
     */
    public function getServiceName($string)
    {
        return $this->getOption('CURLOPT_SERVICE_NAME');
    }

    /**
     * CURLOPT_SERVICE_NAME
     * 
     * @return static
     */
    public function clearServiceName($string)
    {
        return $this->clearOption('CURLOPT_SERVICE_NAME');
    }

    /**
     * CURLOPT_SSH_HOST_PUBLIC_KEY_MD5
     * A string containing 32 hexadecimal digits. The string should be the MD5
     * checksum of the remote host's public key, and libcurl will reject the
     * connection to the host unless the md5sums match. This option is only for
     * SCP and SFTP transfers.
     * 
     * @param string $string CURLOPT_SSH_HOST_PUBLIC_KEY_MD5
     * @since Added in cURL 7.17.1.
     * @return static
     */
    public function setSshHostPublicKeyMd5($string)
    {
        return $this->setOption('CURLOPT_SSH_HOST_PUBLIC_KEY_MD5', $string, 'string');
    }

    /**
     * CURLOPT_SSH_HOST_PUBLIC_KEY_MD5
     * 
     * @return string CURLOPT_SSH_HOST_PUBLIC_KEY_MD5
     */
    public function getSshHostPublicKeyMd5($string)
    {
        return $this->getOption('CURLOPT_SSH_HOST_PUBLIC_KEY_MD5');
    }

    /**
     * CURLOPT_SSH_HOST_PUBLIC_KEY_MD5
     * 
     * @return static
     */
    public function clearSshHostPublicKeyMd5($string)
    {
        return $this->clearOption('CURLOPT_SSH_HOST_PUBLIC_KEY_MD5');
    }

    /**
     * CURLOPT_SSH_PUBLIC_KEYFILE
     * The file name for your public key. If not used, libcurl defaults to
     * $HOME/.ssh/id_dsa.pub if the HOME environment variable is set, and just
     * "id_dsa.pub" in the current directory if HOME is not set.
     * 
     * @param string $string CURLOPT_SSH_PUBLIC_KEYFILE
     * @since Added in cURL 7.16.1.
     * @return static
     */
    public function setSshPublicKeyfile($string)
    {
        return $this->setOption('CURLOPT_SSH_PUBLIC_KEYFILE', $string, 'string');
    }

    /**
     * CURLOPT_SSH_PUBLIC_KEYFILE
     * 
     * @return string CURLOPT_SSH_PUBLIC_KEYFILE
     */
    public function getSshPublicKeyfile($string)
    {
        return $this->getOption('CURLOPT_SSH_PUBLIC_KEYFILE');
    }

    /**
     * CURLOPT_SSH_PUBLIC_KEYFILE
     * 
     * @return static
     */
    public function clearSshPublicKeyfile($string)
    {
        return $this->clearOption('CURLOPT_SSH_PUBLIC_KEYFILE');
    }

    /**
     * CURLOPT_SSH_PRIVATE_KEYFILE
     * The file name for your private key. If not used, libcurl defaults to
     * $HOME/.ssh/id_dsa if the HOME environment variable is set, and just
     * "id_dsa" in the current directory if HOME is not set. If the file is
     * password-protected, set the password with
     * <strong><code>CURLOPT_KEYPASSWD</code></strong>.
     * 
     * @param string $string CURLOPT_SSH_PRIVATE_KEYFILE
     * @since Added in cURL 7.16.1.
     * @return static
     */
    public function setSshPrivateKeyfile($string)
    {
        return $this->setOption('CURLOPT_SSH_PRIVATE_KEYFILE', $string, 'string');
    }

    /**
     * CURLOPT_SSH_PRIVATE_KEYFILE
     * 
     * @return string CURLOPT_SSH_PRIVATE_KEYFILE
     */
    public function getSshPrivateKeyfile($string)
    {
        return $this->getOption('CURLOPT_SSH_PRIVATE_KEYFILE');
    }

    /**
     * CURLOPT_SSH_PRIVATE_KEYFILE
     * 
     * @return static
     */
    public function clearSshPrivateKeyfile($string)
    {
        return $this->clearOption('CURLOPT_SSH_PRIVATE_KEYFILE');
    }

    /**
     * CURLOPT_SSL_CIPHER_LIST
     * A list of ciphers to use for SSL. For example, <em>RC4-SHA</em> and
     * <em>TLSv1</em> are valid cipher lists.
     * 
     * @param string $string CURLOPT_SSL_CIPHER_LIST
     * @return static
     */
    public function setSslCipherList($string)
    {
        return $this->setOption('CURLOPT_SSL_CIPHER_LIST', $string, 'string');
    }

    /**
     * CURLOPT_SSL_CIPHER_LIST
     * 
     * @return string CURLOPT_SSL_CIPHER_LIST
     */
    public function getSslCipherList($string)
    {
        return $this->getOption('CURLOPT_SSL_CIPHER_LIST');
    }

    /**
     * CURLOPT_SSL_CIPHER_LIST
     * 
     * @return static
     */
    public function clearSslCipherList($string)
    {
        return $this->clearOption('CURLOPT_SSL_CIPHER_LIST');
    }

    /**
     * CURLOPT_SSLCERT
     * The name of a file containing a PEM formatted certificate.
     * 
     * @param string $string CURLOPT_SSLCERT
     * @return static
     */
    public function setSslcert($string)
    {
        return $this->setOption('CURLOPT_SSLCERT', $string, 'string');
    }

    /**
     * CURLOPT_SSLCERT
     * 
     * @return string CURLOPT_SSLCERT
     */
    public function getSslcert($string)
    {
        return $this->getOption('CURLOPT_SSLCERT');
    }

    /**
     * CURLOPT_SSLCERT
     * 
     * @return static
     */
    public function clearSslcert($string)
    {
        return $this->clearOption('CURLOPT_SSLCERT');
    }

    /**
     * CURLOPT_SSLCERTPASSWD
     * The password required to use the
     * <strong><code>CURLOPT_SSLCERT</code></strong> certificate.
     * 
     * @param string $string CURLOPT_SSLCERTPASSWD
     * @return static
     */
    public function setSslcertpasswd($string)
    {
        return $this->setOption('CURLOPT_SSLCERTPASSWD', $string, 'string');
    }

    /**
     * CURLOPT_SSLCERTPASSWD
     * 
     * @return string CURLOPT_SSLCERTPASSWD
     */
    public function getSslcertpasswd($string)
    {
        return $this->getOption('CURLOPT_SSLCERTPASSWD');
    }

    /**
     * CURLOPT_SSLCERTPASSWD
     * 
     * @return static
     */
    public function clearSslcertpasswd($string)
    {
        return $this->clearOption('CURLOPT_SSLCERTPASSWD');
    }

    /**
     * CURLOPT_SSLCERTTYPE
     * The format of the certificate. Supported formats are <em>"PEM"</em>
     * (default), <em>"DER"</em>, and <em>"ENG"</em>.
     * 
     * @param string $string CURLOPT_SSLCERTTYPE
     * @since Added in cURL 7.9.3.
     * @return static
     */
    public function setSslcerttype($string)
    {
        return $this->setOption('CURLOPT_SSLCERTTYPE', $string, 'string');
    }

    /**
     * CURLOPT_SSLCERTTYPE
     * 
     * @return string CURLOPT_SSLCERTTYPE
     */
    public function getSslcerttype($string)
    {
        return $this->getOption('CURLOPT_SSLCERTTYPE');
    }

    /**
     * CURLOPT_SSLCERTTYPE
     * 
     * @return static
     */
    public function clearSslcerttype($string)
    {
        return $this->clearOption('CURLOPT_SSLCERTTYPE');
    }

    /**
     * CURLOPT_SSLENGINE
     * The identifier for the crypto engine of the private SSL key specified in
     * <strong><code>CURLOPT_SSLKEY</code></strong>.
     * 
     * @param string $string CURLOPT_SSLENGINE
     * @return static
     */
    public function setSslengine($string)
    {
        return $this->setOption('CURLOPT_SSLENGINE', $string, 'string');
    }

    /**
     * CURLOPT_SSLENGINE
     * 
     * @return string CURLOPT_SSLENGINE
     */
    public function getSslengine($string)
    {
        return $this->getOption('CURLOPT_SSLENGINE');
    }

    /**
     * CURLOPT_SSLENGINE
     * 
     * @return static
     */
    public function clearSslengine($string)
    {
        return $this->clearOption('CURLOPT_SSLENGINE');
    }

    /**
     * CURLOPT_SSLENGINE_DEFAULT
     * The identifier for the crypto engine used for asymmetric crypto operations.
     * 
     * @param string $string CURLOPT_SSLENGINE_DEFAULT
     * @return static
     */
    public function setSslengineDefault($string)
    {
        return $this->setOption('CURLOPT_SSLENGINE_DEFAULT', $string, 'string');
    }

    /**
     * CURLOPT_SSLENGINE_DEFAULT
     * 
     * @return string CURLOPT_SSLENGINE_DEFAULT
     */
    public function getSslengineDefault($string)
    {
        return $this->getOption('CURLOPT_SSLENGINE_DEFAULT');
    }

    /**
     * CURLOPT_SSLENGINE_DEFAULT
     * 
     * @return static
     */
    public function clearSslengineDefault($string)
    {
        return $this->clearOption('CURLOPT_SSLENGINE_DEFAULT');
    }

    /**
     * CURLOPT_SSLKEY
     * The name of a file containing a private SSL key.
     * 
     * @param string $string CURLOPT_SSLKEY
     * @return static
     */
    public function setSslkey($string)
    {
        return $this->setOption('CURLOPT_SSLKEY', $string, 'string');
    }

    /**
     * CURLOPT_SSLKEY
     * 
     * @return string CURLOPT_SSLKEY
     */
    public function getSslkey($string)
    {
        return $this->getOption('CURLOPT_SSLKEY');
    }

    /**
     * CURLOPT_SSLKEY
     * 
     * @return static
     */
    public function clearSslkey($string)
    {
        return $this->clearOption('CURLOPT_SSLKEY');
    }

    /**
     * CURLOPT_SSLKEYPASSWD
     * <p class="para"> The secret password needed to use the private SSL key
     * specified in <strong><code>CURLOPT_SSLKEY</code></strong>. </p><blockquote
     * class="note"><p><strong class="note">Note</strong>: </p><p class="para">
     * Since this option contains a sensitive password, remember to keep the PHP
     * script it is contained within safe. </p> </blockquote>
     * 
     * @param string $string CURLOPT_SSLKEYPASSWD
     * @return static
     */
    public function setSslkeypasswd($string)
    {
        return $this->setOption('CURLOPT_SSLKEYPASSWD', $string, 'string');
    }

    /**
     * CURLOPT_SSLKEYPASSWD
     * 
     * @return string CURLOPT_SSLKEYPASSWD
     */
    public function getSslkeypasswd($string)
    {
        return $this->getOption('CURLOPT_SSLKEYPASSWD');
    }

    /**
     * CURLOPT_SSLKEYPASSWD
     * 
     * @return static
     */
    public function clearSslkeypasswd($string)
    {
        return $this->clearOption('CURLOPT_SSLKEYPASSWD');
    }

    /**
     * CURLOPT_SSLKEYTYPE
     * The key type of the private SSL key specified in
     * <strong><code>CURLOPT_SSLKEY</code></strong>. Supported key types are
     * <em>"PEM"</em> (default), <em>"DER"</em>, and <em>"ENG"</em>.
     * 
     * @param string $string CURLOPT_SSLKEYTYPE
     * @return static
     */
    public function setSslkeytype($string)
    {
        return $this->setOption('CURLOPT_SSLKEYTYPE', $string, 'string');
    }

    /**
     * CURLOPT_SSLKEYTYPE
     * 
     * @return string CURLOPT_SSLKEYTYPE
     */
    public function getSslkeytype($string)
    {
        return $this->getOption('CURLOPT_SSLKEYTYPE');
    }

    /**
     * CURLOPT_SSLKEYTYPE
     * 
     * @return static
     */
    public function clearSslkeytype($string)
    {
        return $this->clearOption('CURLOPT_SSLKEYTYPE');
    }

    /**
     * CURLOPT_UNIX_SOCKET_PATH
     * Enables the use of Unix domain sockets as connection endpoint and sets the
     * path to the given <span class="type"><a href="language.types.string.php"
     * class="type string">string</a></span>.
     * 
     * @param string $string CURLOPT_UNIX_SOCKET_PATH
     * @since Added in cURL 7.40.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setUnixSocketPath($string)
    {
        return $this->setOption('CURLOPT_UNIX_SOCKET_PATH', $string, 'string');
    }

    /**
     * CURLOPT_UNIX_SOCKET_PATH
     * 
     * @return string CURLOPT_UNIX_SOCKET_PATH
     */
    public function getUnixSocketPath($string)
    {
        return $this->getOption('CURLOPT_UNIX_SOCKET_PATH');
    }

    /**
     * CURLOPT_UNIX_SOCKET_PATH
     * 
     * @return static
     */
    public function clearUnixSocketPath($string)
    {
        return $this->clearOption('CURLOPT_UNIX_SOCKET_PATH');
    }

    /**
     * CURLOPT_URL
     * The URL to fetch. This can also be set when initializing a session with
     * <span class="function"><a href="function.curl-init.php"
     * class="function">curl_init()</a></span>.
     * 
     * @param string $string CURLOPT_URL
     * @return static
     */
    public function setUrl($string)
    {
        return $this->setOption('CURLOPT_URL', $string, 'string');
    }

    /**
     * CURLOPT_URL
     * 
     * @return string CURLOPT_URL
     */
    public function getUrl($string)
    {
        return $this->getOption('CURLOPT_URL');
    }

    /**
     * CURLOPT_URL
     * 
     * @return static
     */
    public function clearUrl($string)
    {
        return $this->clearOption('CURLOPT_URL');
    }

    /**
     * CURLOPT_USERAGENT
     * The contents of the <em>"User-Agent: "</em> header to be used in a HTTP
     * request.
     * 
     * @param string $string CURLOPT_USERAGENT
     * @return static
     */
    public function setUseragent($string)
    {
        return $this->setOption('CURLOPT_USERAGENT', $string, 'string');
    }

    /**
     * CURLOPT_USERAGENT
     * 
     * @return string CURLOPT_USERAGENT
     */
    public function getUseragent($string)
    {
        return $this->getOption('CURLOPT_USERAGENT');
    }

    /**
     * CURLOPT_USERAGENT
     * 
     * @return static
     */
    public function clearUseragent($string)
    {
        return $this->clearOption('CURLOPT_USERAGENT');
    }

    /**
     * CURLOPT_USERNAME
     * The user name to use in authentication.
     * 
     * @param string $string CURLOPT_USERNAME
     * @since Added in cURL 7.19.1. Available since PHP 5.5.0.
     * @return static
     */
    public function setUsername($string)
    {
        return $this->setOption('CURLOPT_USERNAME', $string, 'string');
    }

    /**
     * CURLOPT_USERNAME
     * 
     * @return string CURLOPT_USERNAME
     */
    public function getUsername($string)
    {
        return $this->getOption('CURLOPT_USERNAME');
    }

    /**
     * CURLOPT_USERNAME
     * 
     * @return static
     */
    public function clearUsername($string)
    {
        return $this->clearOption('CURLOPT_USERNAME');
    }

    /**
     * CURLOPT_USERPWD
     * A username and password formatted as <em>"[username]:[password]"</em> to
     * use for the connection.
     * 
     * @param string $string CURLOPT_USERPWD
     * @return static
     */
    public function setUserpwd($string)
    {
        return $this->setOption('CURLOPT_USERPWD', $string, 'string');
    }

    /**
     * CURLOPT_USERPWD
     * 
     * @return string CURLOPT_USERPWD
     */
    public function getUserpwd($string)
    {
        return $this->getOption('CURLOPT_USERPWD');
    }

    /**
     * CURLOPT_USERPWD
     * 
     * @return static
     */
    public function clearUserpwd($string)
    {
        return $this->clearOption('CURLOPT_USERPWD');
    }

    /**
     * CURLOPT_XOAUTH2_BEARER
     * Specifies the OAuth 2.0 access token.
     * 
     * @param string $string CURLOPT_XOAUTH2_BEARER
     * @since Added in cURL 7.33.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setXoauth2Bearer($string)
    {
        return $this->setOption('CURLOPT_XOAUTH2_BEARER', $string, 'string');
    }

    /**
     * CURLOPT_XOAUTH2_BEARER
     * 
     * @return string CURLOPT_XOAUTH2_BEARER
     */
    public function getXoauth2Bearer($string)
    {
        return $this->getOption('CURLOPT_XOAUTH2_BEARER');
    }

    /**
     * CURLOPT_XOAUTH2_BEARER
     * 
     * @return static
     */
    public function clearXoauth2Bearer($string)
    {
        return $this->clearOption('CURLOPT_XOAUTH2_BEARER');
    }

    /**
     * CURLOPT_CONNECT_TO
     * Connect to a specific host and port instead of the URL's host and port.
     * Accepts an array of strings with the format
     * <em>HOST:PORT:CONNECT-TO-HOST:CONNECT-TO-PORT</em>.
     * 
     * @param array $array CURLOPT_CONNECT_TO
     * @since Added in cURL 7.49.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setConnectTo($array)
    {
        return $this->setOption('CURLOPT_CONNECT_TO', $array, 'array');
    }

    /**
     * CURLOPT_CONNECT_TO
     * 
     * @return array CURLOPT_CONNECT_TO
     */
    public function getConnectTo($array)
    {
        return $this->getOption('CURLOPT_CONNECT_TO');
    }

    /**
     * CURLOPT_CONNECT_TO
     * 
     * @return static
     */
    public function clearConnectTo($array)
    {
        return $this->clearOption('CURLOPT_CONNECT_TO');
    }

    /**
     * CURLOPT_HTTP200ALIASES
     * An array of HTTP 200 responses that will be treated as valid responses and
     * not as errors.
     * 
     * @param array $array CURLOPT_HTTP200ALIASES
     * @since Added in cURL 7.10.3.
     * @return static
     */
    public function setHttp200aliases($array)
    {
        return $this->setOption('CURLOPT_HTTP200ALIASES', $array, 'array');
    }

    /**
     * CURLOPT_HTTP200ALIASES
     * 
     * @return array CURLOPT_HTTP200ALIASES
     */
    public function getHttp200aliases($array)
    {
        return $this->getOption('CURLOPT_HTTP200ALIASES');
    }

    /**
     * CURLOPT_HTTP200ALIASES
     * 
     * @return static
     */
    public function clearHttp200aliases($array)
    {
        return $this->clearOption('CURLOPT_HTTP200ALIASES');
    }

    /**
     * CURLOPT_HTTPHEADER
     * An array of HTTP header fields to set, in the format <code class="code">
     * array('Content-type: text/plain', 'Content-length: 100') </code>
     * 
     * @param array $array CURLOPT_HTTPHEADER
     * @return static
     */
    public function setHttpheader($array)
    {
        return $this->setOption('CURLOPT_HTTPHEADER', $array, 'array');
    }

    /**
     * CURLOPT_HTTPHEADER
     * 
     * @return array CURLOPT_HTTPHEADER
     */
    public function getHttpheader($array)
    {
        return $this->getOption('CURLOPT_HTTPHEADER');
    }

    /**
     * CURLOPT_HTTPHEADER
     * 
     * @return static
     */
    public function clearHttpheader($array)
    {
        return $this->clearOption('CURLOPT_HTTPHEADER');
    }

    /**
     * CURLOPT_POSTQUOTE
     * An array of FTP commands to execute on the server after the FTP request has
     * been performed.
     * 
     * @param array $array CURLOPT_POSTQUOTE
     * @return static
     */
    public function setPostquote($array)
    {
        return $this->setOption('CURLOPT_POSTQUOTE', $array, 'array');
    }

    /**
     * CURLOPT_POSTQUOTE
     * 
     * @return array CURLOPT_POSTQUOTE
     */
    public function getPostquote($array)
    {
        return $this->getOption('CURLOPT_POSTQUOTE');
    }

    /**
     * CURLOPT_POSTQUOTE
     * 
     * @return static
     */
    public function clearPostquote($array)
    {
        return $this->clearOption('CURLOPT_POSTQUOTE');
    }

    /**
     * CURLOPT_PROXYHEADER
     * An array of custom HTTP headers to pass to proxies.
     * 
     * @param array $array CURLOPT_PROXYHEADER
     * @since Added in cURL 7.37.0. Available since PHP 7.0.7.
     * @return static
     */
    public function setProxyheader($array)
    {
        return $this->setOption('CURLOPT_PROXYHEADER', $array, 'array');
    }

    /**
     * CURLOPT_PROXYHEADER
     * 
     * @return array CURLOPT_PROXYHEADER
     */
    public function getProxyheader($array)
    {
        return $this->getOption('CURLOPT_PROXYHEADER');
    }

    /**
     * CURLOPT_PROXYHEADER
     * 
     * @return static
     */
    public function clearProxyheader($array)
    {
        return $this->clearOption('CURLOPT_PROXYHEADER');
    }

    /**
     * CURLOPT_QUOTE
     * An array of FTP commands to execute on the server prior to the FTP request.
     * 
     * @param array $array CURLOPT_QUOTE
     * @return static
     */
    public function setQuote($array)
    {
        return $this->setOption('CURLOPT_QUOTE', $array, 'array');
    }

    /**
     * CURLOPT_QUOTE
     * 
     * @return array CURLOPT_QUOTE
     */
    public function getQuote($array)
    {
        return $this->getOption('CURLOPT_QUOTE');
    }

    /**
     * CURLOPT_QUOTE
     * 
     * @return static
     */
    public function clearQuote($array)
    {
        return $this->clearOption('CURLOPT_QUOTE');
    }

    /**
     * CURLOPT_FILE
     * The file that the transfer should be written to. The default is
     * <em>STDOUT</em> (the browser window).
     * 
     * @param resource $resource CURLOPT_FILE
     * @return static
     */
    public function setFile($resource)
    {
        return $this->setOption('CURLOPT_FILE', $resource, 'resource');
    }

    /**
     * CURLOPT_FILE
     * 
     * @return resource CURLOPT_FILE
     */
    public function getFile($resource)
    {
        return $this->getOption('CURLOPT_FILE');
    }

    /**
     * CURLOPT_FILE
     * 
     * @return static
     */
    public function clearFile($resource)
    {
        return $this->clearOption('CURLOPT_FILE');
    }

    /**
     * CURLOPT_INFILE
     * The file that the transfer should be read from when uploading.
     * 
     * @param resource $resource CURLOPT_INFILE
     * @return static
     */
    public function setInfile($resource)
    {
        return $this->setOption('CURLOPT_INFILE', $resource, 'resource');
    }

    /**
     * CURLOPT_INFILE
     * 
     * @return resource CURLOPT_INFILE
     */
    public function getInfile($resource)
    {
        return $this->getOption('CURLOPT_INFILE');
    }

    /**
     * CURLOPT_INFILE
     * 
     * @return static
     */
    public function clearInfile($resource)
    {
        return $this->clearOption('CURLOPT_INFILE');
    }

    /**
     * CURLOPT_STDERR
     * An alternative location to output errors to instead of <em>STDERR</em>.
     * 
     * @param resource $resource CURLOPT_STDERR
     * @return static
     */
    public function setStderr($resource)
    {
        return $this->setOption('CURLOPT_STDERR', $resource, 'resource');
    }

    /**
     * CURLOPT_STDERR
     * 
     * @return resource CURLOPT_STDERR
     */
    public function getStderr($resource)
    {
        return $this->getOption('CURLOPT_STDERR');
    }

    /**
     * CURLOPT_STDERR
     * 
     * @return static
     */
    public function clearStderr($resource)
    {
        return $this->clearOption('CURLOPT_STDERR');
    }

    /**
     * CURLOPT_WRITEHEADER
     * The file that the header part of the transfer is written to.
     * 
     * @param resource $resource CURLOPT_WRITEHEADER
     * @return static
     */
    public function setWriteheader($resource)
    {
        return $this->setOption('CURLOPT_WRITEHEADER', $resource, 'resource');
    }

    /**
     * CURLOPT_WRITEHEADER
     * 
     * @return resource CURLOPT_WRITEHEADER
     */
    public function getWriteheader($resource)
    {
        return $this->getOption('CURLOPT_WRITEHEADER');
    }

    /**
     * CURLOPT_WRITEHEADER
     * 
     * @return static
     */
    public function clearWriteheader($resource)
    {
        return $this->clearOption('CURLOPT_WRITEHEADER');
    }

    /**
     * CURLOPT_HEADERFUNCTION
     * A callback accepting two parameters. The first is the cURL resource, the
     * second is a string with the header data to be written. The header data must
     * be written by this callback. Return the number of bytes written.
     * 
     * @param closure $closure CURLOPT_HEADERFUNCTION
     * @return static
     */
    public function setHeaderfunction($closure)
    {
        return $this->setOption('CURLOPT_HEADERFUNCTION', $closure, 'closure');
    }

    /**
     * CURLOPT_HEADERFUNCTION
     * 
     * @return closure CURLOPT_HEADERFUNCTION
     */
    public function getHeaderfunction($closure)
    {
        return $this->getOption('CURLOPT_HEADERFUNCTION');
    }

    /**
     * CURLOPT_HEADERFUNCTION
     * 
     * @return static
     */
    public function clearHeaderfunction($closure)
    {
        return $this->clearOption('CURLOPT_HEADERFUNCTION');
    }

    /**
     * CURLOPT_PASSWDFUNCTION
     * A callback accepting three parameters. The first is the cURL resource, the
     * second is a string containing a password prompt, and the third is the
     * maximum password length. Return the string containing the password.
     * 
     * @param closure $closure CURLOPT_PASSWDFUNCTION
     * @return static
     */
    public function setPasswdfunction($closure)
    {
        return $this->setOption('CURLOPT_PASSWDFUNCTION', $closure, 'closure');
    }

    /**
     * CURLOPT_PASSWDFUNCTION
     * 
     * @return closure CURLOPT_PASSWDFUNCTION
     */
    public function getPasswdfunction($closure)
    {
        return $this->getOption('CURLOPT_PASSWDFUNCTION');
    }

    /**
     * CURLOPT_PASSWDFUNCTION
     * 
     * @return static
     */
    public function clearPasswdfunction($closure)
    {
        return $this->clearOption('CURLOPT_PASSWDFUNCTION');
    }

    /**
     * CURLOPT_PROGRESSFUNCTION
     * <p class="para"> A callback accepting five parameters. The first is the
     * cURL resource, the second is the total number of bytes expected to be
     * downloaded in this transfer, the third is the number of bytes downloaded so
     * far, the fourth is the total number of bytes expected to be uploaded in
     * this transfer, and the fifth is the number of bytes uploaded so far. </p>
     * <blockquote class="note"><p><strong class="note">Note</strong>: </p><p
     * class="para"> The callback is only called when the
     * <strong><code>CURLOPT_NOPROGRESS</code></strong> option is set to
     * <strong><code>FALSE</code></strong>. </p> </blockquote> <p class="para">
     * Return a non-zero value to abort the transfer. In which case, the transfer
     * will set a <strong><code>CURLE_ABORTED_BY_CALLBACK</code></strong> error.
     * </p>
     * 
     * @param closure $closure CURLOPT_PROGRESSFUNCTION
     * @return static
     */
    public function setProgressfunction($closure)
    {
        return $this->setOption('CURLOPT_PROGRESSFUNCTION', $closure, 'closure');
    }

    /**
     * CURLOPT_PROGRESSFUNCTION
     * 
     * @return closure CURLOPT_PROGRESSFUNCTION
     */
    public function getProgressfunction($closure)
    {
        return $this->getOption('CURLOPT_PROGRESSFUNCTION');
    }

    /**
     * CURLOPT_PROGRESSFUNCTION
     * 
     * @return static
     */
    public function clearProgressfunction($closure)
    {
        return $this->clearOption('CURLOPT_PROGRESSFUNCTION');
    }

    /**
     * CURLOPT_READFUNCTION
     * A callback accepting three parameters. The first is the cURL resource, the
     * second is a stream resource provided to cURL through the option
     * <strong><code>CURLOPT_INFILE</code></strong>, and the third is the maximum
     * amount of data to be read. The callback must return a string with a length
     * equal or smaller than the amount of data requested, typically by reading it
     * from the passed stream resource. It should return an empty string to signal
     * <em>EOF</em>.
     * 
     * @param closure $closure CURLOPT_READFUNCTION
     * @return static
     */
    public function setReadfunction($closure)
    {
        return $this->setOption('CURLOPT_READFUNCTION', $closure, 'closure');
    }

    /**
     * CURLOPT_READFUNCTION
     * 
     * @return closure CURLOPT_READFUNCTION
     */
    public function getReadfunction($closure)
    {
        return $this->getOption('CURLOPT_READFUNCTION');
    }

    /**
     * CURLOPT_READFUNCTION
     * 
     * @return static
     */
    public function clearReadfunction($closure)
    {
        return $this->clearOption('CURLOPT_READFUNCTION');
    }

    /**
     * CURLOPT_WRITEFUNCTION
     * A callback accepting two parameters. The first is the cURL resource, and
     * the second is a string with the data to be written. The data must be saved
     * by this callback. It must return the exact number of bytes written or the
     * transfer will be aborted with an error.
     * 
     * @param closure $closure CURLOPT_WRITEFUNCTION
     * @return static
     */
    public function setWritefunction($closure)
    {
        return $this->setOption('CURLOPT_WRITEFUNCTION', $closure, 'closure');
    }

    /**
     * CURLOPT_WRITEFUNCTION
     * 
     * @return closure CURLOPT_WRITEFUNCTION
     */
    public function getWritefunction($closure)
    {
        return $this->getOption('CURLOPT_WRITEFUNCTION');
    }

    /**
     * CURLOPT_WRITEFUNCTION
     * 
     * @return static
     */
    public function clearWritefunction($closure)
    {
        return $this->clearOption('CURLOPT_WRITEFUNCTION');
    }

    /**
     * CURLOPT_SHARE
     * A result of <span class="function"><a href="function.curl-share-init.php"
     * class="function">curl_share_init()</a></span>. Makes the cURL handle to use
     * the data from the shared handle.
     * 
     * @param mixed $mixed CURLOPT_SHARE
     * @return static
     */
    public function setShare($mixed)
    {
        return $this->setOption('CURLOPT_SHARE', $mixed, 'mixed');
    }

    /**
     * CURLOPT_SHARE
     * 
     * @return mixed CURLOPT_SHARE
     */
    public function getShare($mixed)
    {
        return $this->getOption('CURLOPT_SHARE');
    }

    /**
     * CURLOPT_SHARE
     * 
     * @return static
     */
    public function clearShare($mixed)
    {
        return $this->clearOption('CURLOPT_SHARE');
    }

}
