<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Atratores extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'atratores_biomecanica';

    protected $fillable = [

        'data',
        'hip_lock',
        'retracao_perna',
        'fp_from_above',
        'positive_running',
        'vertical_head',
        'ub_first',
        'rot_tronco_extensao',
        'desaceleracao',
        'power_line',
        'tronco_inclin_frente',
        'knee_drive',
        'estrategia_rot_ext',
        'aplicacao_forca_hor',
        't_contato_dir',
        't_contato_es',
        't_voo_dir',
        't_voo_es',
        'frequencia_dir',
        'frequencia_es',
        'oscilacao_dir',
        'oscilacao_es',
        'f_max_dir',
        'f_max_es',
        'leg_stiff_dir',
        'leg_stiff_es',
        'pronacao_dir',
        'pronacao_es',
        'strike_dir',
        'strike_es',
        'tibia_dir',
        'tibia_es',
        'ass_passada',
        'romain_chair_bi',
        'romain_chair_uni_dir',
        'romain_chair_uni_es',
        'iso_reto_dir',
        'iso_reto_es',
        'hip_thrust',
        'split_jump_dir',
        'split_jump_es',
        'cmj',
        'sj',
        'rsi_stifness',
        'rsi_drop_jump',
        'indice_bosco',
        'horizontal_jump',
        'sl_hop_test_dir',
        'sl_hop_test_es',
        'triple_hop_dir',
        'triple_hop_es',
        'cross_over_dir',
        'cross_over_es',
        'm_timed_dir',
        'm_timed_es',
        'toe_off',
        'ground_contact',
        'aluno_id',
        'cadastrado_por'

    ];
// retorna login do usuário que cadastrou essa avaliação
    public function cadastradoPor() {

        return $this->belongsTo('App\Usuario', 'cadastrado_por')->first()->login;

    }
// retorna nome do aluno
    public function aluno() {

        return $this->belongsTo('App\Aluno', 'aluno_id')->first()->nome;

    }
}
