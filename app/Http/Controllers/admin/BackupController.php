<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DatabaseBackup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\admin\BackUpRestore;


class BackupController extends Controller
{

    public function index()
    {
        $data = [
            'title' => 'Backup Database',
            'activeMenu' => 'backup-database',
            'backups' => DatabaseBackup::all()
        ];
        return view('admin.settings.backup-database', $data);
    }

    public function store()
    {
        $backUpInstance = new BackUpRestore(env('DB_HOST'), env('DB_DATABASE'), env('DB_USERNAME'), env('DB_PASSWORD'), database_path());
        $file_name = date('Y-m-d H:i:s') . '.sql';
        $backUpInstance->set_database_dump_filename($file_name);
        $takeBackup = $backUpInstance->backup();
        $saveEntry = new DatabaseBackup();
        $saveEntry->file_name = $file_name;
        $saveEntry->save();

        return redirect()->back()->with(responseMessage(1, 'success', 'A new database backup has been generated'));


    }


    public function downloadDatabase($id)
    {
        $file = DatabaseBackup::findOrFail($id)->first();
        $path = database_path($file->file_name);

        if (file_exists($path))
            return response()->download($path);
        return redirect()->back()->with(responseMessage(1, 'error', 'File does not exist on server.'));


    }


    public function delete($id)
    {

        $file = DatabaseBackup::findOrFail($id)->first();
        $path = database_path($file->file_name);
        unlink($path);
        DatabaseBackup::whereId($id)->delete();
        return response()->json(responseMessage(1, 'error', "Database backup has been removed from server."));
        //return redirect()->back()->with(responseMessage(1, 'error', 'Database backup delete from server'));
    }
}
