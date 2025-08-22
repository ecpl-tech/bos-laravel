<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperDetail extends Model
{
    use HasFactory;

    protected $table = 'paper_details';

    protected $guarded = [];

    /**
     * Define the relationship to the Course model.
     */
    public function course()
    {
        return $this->belongsTo(PaperDetail::class, 'course');
    }

    /**
     * Get papers grouped by course type.
     * Returns array: [course => [paper names]]
     */
    public static function papersByCourse()
    {
        $papers = self::with('course')->where(['scheme' => 'new', 'status' => '1'])->get();
        $result = [];
        foreach ($papers as $paper) {
            $course = $paper->course->papername ?? $paper->course ?? 'Unknown';
            $result[$course][] = [
            'id' => $paper->id,
            'papername' => $paper->papername
            ];
        }
        return $result;
    }
}
