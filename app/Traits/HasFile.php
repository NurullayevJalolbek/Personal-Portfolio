<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait HasFile
{
    public function attachFile($field, Request $request = null)
    {
        if ($request->file($field)) {
            $fileName = Str::random(40) . '.' . $request->{$field}->extension();

            $request->file($field)->storeAs($this->getTable(), $fileName);

            $this->deleteFile($field);

            $this->{$field} = $fileName;
        }

        return $this;
    }

    public function attachFiles(Request $request = null)
    {
        $request = getRequest($request);

        if ($this->fileFields) {
            foreach ($this->fileFields as $field) {
                if ($request->file($field)) {
                    $this->attachFile($field, $request);
                }
            }
            $this->save();
        }

        return $this;
    }

    public function deleteFile($field): void
    {
        if ($this->{$field}) {
            Storage::delete($this->getTable() . '/' . $this->{$field});
        }
    }

    public function deleteFiles(): void
    {
        if ($this->fileFields) {
            foreach ($this->fileFields as $field) {
                $this->deleteFile($field);
            }
        }
    }

    public function getPath($field)
    {
        if ($this->{$field} && Storage::disk('public')->exists($this->getTable() . '/' . $this->{$field})) {
            return Storage::disk('public')->path($this->getTable() . '/' . $this->{$field});
        } else {
            return null;
        }
    }

    public function getFile($field, bool $download = false)
    {
        $url = $this->{$field}
            ? asset('storage/' . $this->getTable() . '/' . $this->{$field})
            : null;

        if ($download) {
            if (Storage::disk('public')->exists($this->getTable() . '/' . $this->{$field})) {
                return $url;
            } else {
                return null;
            }
        } else {
            return $url;
        }
    }

    public function getAvatar($field)
    {
        $url = $this->{$field}
            ? asset('storage/' . $this->getTable() . '/' . $this->{$field})
            : null;

        if ($url && Storage::disk('public')->exists($this->getTable() . '/' . $this->{$field})) {
            return $url;
        } else {
            return asset('assets/img/default/noimage_light.png');
        }
    }

    public function getImage($field)
    {
        $url = $this->{$field}
            ? asset('storage/' . $this->getTable() . '/' . $this->{$field})
            : null;

        if ($url && Storage::disk('public')->exists($this->getTable() . '/' . $this->{$field})) {
            return $url;
        } else {
            return asset('img/not_found.png');
        }
    }

    public function fileExists($field)
    {
        return $this->{$field}
            ? Storage::disk('public')->exists($this->getTable() . '/' . $this->{$field})
            : null;
    }

    public function getLogo($field)
    {
        $url = $this->{$field}
            ? asset('storage/' . $this->getTable() . '/' . $this->{$field})
            : null;

        if ($url && Storage::disk('public')->exists($this->getTable() . '/' . $this->{$field})) {
            return $url;
        } else {
            return asset('favicon.ico');
        }
    }
}
