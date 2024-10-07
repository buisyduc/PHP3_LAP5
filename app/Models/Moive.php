<?php 
namespace App\Models;
use Hamcrest\BaseMatcher;
use Illuminate\Database\Eloquent\Model;
class Moive extends Model{
    protected $fillable = ['title','poster','intro','release_date','gene_id'];
    public function gene()
    {
        return $this->belongsTo(Gene ::class, 'gene_id');
    }
    
}