/*
*  This program is free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  This program is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU Library General Public License for more details.
*
*  You should have received a copy of the GNU General Public License
*  along with this program; if not, write to the Free Software
*  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
*/

/**
 * \file ftpConnection.cpp
 * Create a class to download files over ftp.
 * \author Andrew Schofield
 **/

#include "fahmon.h"
#include "ftpConnection.h"

#include "tools.h"
#include "preferencesManager.h"
#include "messagesManager.h"

#include "wx/curl/ftp.h"
#include "wx/curl/ftptool.h"


bool FTPConnection::GetFTPFile(wxString url, wxString tempFile)
{
	bool isUsingProxy;
	wxString proxyAddress;
	wxUint32 proxyPort;
	bool proxyNeedsAuthentication;
	wxString proxyUsername;
	wxString proxyPassword;
	wxString agent;

	_PrefsGetBool        (PREF_FTPCONNECTION_USEPROXY,                   isUsingProxy);
	_PrefsGetString      (PREF_FTPCONNECTION_PROXYADDRESS,               proxyAddress);
	_PrefsGetUint        (PREF_FTPCONNECTION_PROXYPORT,                  proxyPort);
	_PrefsGetBool        (PREF_FTPCONNECTION_USE_PROXY_AUTHENTICATION,   proxyNeedsAuthentication);
	_PrefsGetString      (PREF_FTPCONNECTION_PROXY_USERNAME,             proxyUsername);
	_PrefsGetHiddenString(PREF_FTPCONNECTION_PROXY_PASSWORD,             proxyPassword);

	agent = wxString::Format(wxT("%s/%s"), _T(FMC_APPNAME), _T(FMC_VERSION));

	wxCurlFTP ftp(url);
	ftp.UseProxy(isUsingProxy);
	ftp.SetProxyHost(proxyAddress);
	ftp.SetProxyPort(proxyPort);
	ftp.SetProxyUsername(proxyUsername);
	ftp.SetProxyPassword(proxyPassword);
	ftp.SetOpt(CURLOPT_USERAGENT, (const char*)agent.c_str());
	ftp.UseEPSV(true);

	if(!ftp.Get(tempFile))
	{
		if(tempFile.IsEmpty() == false)
		{
			wxRemoveFile(tempFile);
		}
		return false;
	}
	else
		return true;
}


long FTPConnection::GetFTPResponseCode(wxString url)
{
	bool isUsingProxy;
	wxString proxyAddress;
	wxUint32 proxyPort;
	bool proxyNeedsAuthentication;
	wxString proxyUsername;
	wxString proxyPassword;
	wxString agent;

	_PrefsGetBool        (PREF_FTPCONNECTION_USEPROXY,                   isUsingProxy);
	_PrefsGetString      (PREF_FTPCONNECTION_PROXYADDRESS,               proxyAddress);
	_PrefsGetUint        (PREF_FTPCONNECTION_PROXYPORT,                  proxyPort);
	_PrefsGetBool        (PREF_FTPCONNECTION_USE_PROXY_AUTHENTICATION,   proxyNeedsAuthentication);
	_PrefsGetString      (PREF_FTPCONNECTION_PROXY_USERNAME,             proxyUsername);
	_PrefsGetHiddenString(PREF_FTPCONNECTION_PROXY_PASSWORD,             proxyPassword);

	agent = wxString::Format(wxT("%s/%s"), _T(FMC_APPNAME), _T(FMC_VERSION));

	wxCurlFTP ftp(url);
	ftp.UseProxy(isUsingProxy);
	ftp.SetProxyHost(proxyAddress);
	ftp.SetProxyPort(proxyPort);
	ftp.SetProxyUsername(proxyUsername);
	ftp.SetProxyPassword(proxyPassword);
	ftp.SetOpt(CURLOPT_USERAGENT, (const char*)agent.c_str());
	ftp.UseEPSV(true);

	ftp.List();
	return ftp.GetResponseCode();
}


wxDateTime FTPConnection::GetFTPFileModificationTime(wxString url)
{
	bool isUsingProxy;
	wxString proxyAddress;
	wxUint32 proxyPort;
	bool proxyNeedsAuthentication;
	wxString proxyUsername;
	wxString proxyPassword;
	wxString agent;

	_PrefsGetBool        (PREF_FTPCONNECTION_USEPROXY,                   isUsingProxy);
	_PrefsGetString      (PREF_FTPCONNECTION_PROXYADDRESS,               proxyAddress);
	_PrefsGetUint        (PREF_FTPCONNECTION_PROXYPORT,                  proxyPort);
	_PrefsGetBool        (PREF_FTPCONNECTION_USE_PROXY_AUTHENTICATION,   proxyNeedsAuthentication);
	_PrefsGetString      (PREF_FTPCONNECTION_PROXY_USERNAME,             proxyUsername);
	_PrefsGetHiddenString(PREF_FTPCONNECTION_PROXY_PASSWORD,             proxyPassword);

	agent = wxString::Format(wxT("%s/%s"), _T(FMC_APPNAME), _T(FMC_VERSION));

	wxCurlFTPTool ftp(url);

	ftp.UseProxy(isUsingProxy);
	ftp.SetProxyHost(proxyAddress);
	ftp.SetProxyPort(proxyPort);
	ftp.SetProxyUsername(proxyUsername);
	ftp.SetProxyPassword(proxyPassword);
	ftp.SetOpt(CURLOPT_USERAGENT, (const char*)agent.c_str());
	//return ftp.GetLastModified();
	return wxDateTime((double)0);
}


bool FTPConnection::PutFTPFile(wxString url, wxString tempFile)
{
	bool isUsingProxy;
	wxString proxyAddress;
	wxUint32 proxyPort;
	bool proxyNeedsAuthentication;
	wxString proxyUsername;
	wxString proxyPassword;
	wxString agent;

	_PrefsGetBool        (PREF_FTPCONNECTION_USEPROXY,                   isUsingProxy);
	_PrefsGetString      (PREF_FTPCONNECTION_PROXYADDRESS,               proxyAddress);
	_PrefsGetUint        (PREF_FTPCONNECTION_PROXYPORT,                  proxyPort);
	_PrefsGetBool        (PREF_FTPCONNECTION_USE_PROXY_AUTHENTICATION,   proxyNeedsAuthentication);
	_PrefsGetString      (PREF_FTPCONNECTION_PROXY_USERNAME,             proxyUsername);
	_PrefsGetHiddenString(PREF_FTPCONNECTION_PROXY_PASSWORD,             proxyPassword);

	agent = wxString::Format(wxT("%s/%s"), _T(FMC_APPNAME), _T(FMC_VERSION));

	wxCurlFTP ftp(url);
	ftp.UseProxy(isUsingProxy);
	ftp.SetProxyHost(proxyAddress);
	ftp.SetProxyPort(proxyPort);
	ftp.SetProxyUsername(proxyUsername);
	ftp.SetProxyPassword(proxyPassword);
	ftp.SetOpt(CURLOPT_USERAGENT, (const char*)agent.c_str());
	ftp.UseEPSV(true);

	if(!ftp.Put(tempFile))
	{
		return false;
	}
	else
		return true;
}
