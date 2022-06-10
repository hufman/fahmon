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
 * \file projectHelperThread.cpp
 * Manages threads for project database updates.
 * \author François Ingelrest
 * \author Andrew Schofield
 **/

#include "projectHelperThread.h"
#include "fahmon.h"

#include "mainDialog.h"
#include "projectsManager.h"


ProjectHelperThread::ProjectHelperThread(bool isForced, bool isInSilentMode) : wxThread(wxTHREAD_DETACHED)
{
	mIsForced       = isForced;
	mIsInSilentMode = isInSilentMode;

	Create();
	Run();
}


void* ProjectHelperThread::Entry(void)
{
	bool           updateResult;
	wxCommandEvent event(EVT_PROJECTS_DATABASE_UPDATED);

	// We use the 'inlined' method to update the database
	// (The job is done in the current execution flow)
	updateResult = ProjectsManager::GetInstance()->UpdateDatabase(mIsForced, mIsInSilentMode);

	// Post an event to the queue of the MainDialog to warn it that the job is done
	// We do this only if everything went OK
	if(updateResult == true)
	{
		MainDialog::GetInstance()->GetEventHandler()->AddPendingEvent(event);
	}

	// Dummy return code
	return NULL;
}
