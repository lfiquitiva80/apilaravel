<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;


class Employee extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    //protected $guarded = [];


         /**
     * The database connection used by the model.
     *
     * @var string
     */
     protected $connection = 'duquesa';

     /**
     * The database table used by the model.
     *
     * @var string
     */
     protected $table = 'MTPROCLI';

     
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'APELLIDO1',
            'APELLIDO2',
            'AUTORET',
            'BANCO',
            'CALIFCALID',
            'CALIFTIEMP',
            'CANAL',
            'CDCIIU',
            'CIIU',
            'CIUDAD',
            'CIUDADPRV',
            'CODALTERNO',
            'CODDESFIN',
            'CODDESFINP',
            'CODIGOCTA',
            'CODIGOCTAP',
            'CODPOSTAL',
            'CODPOSTALP',
            'CODPRECIO',
            'CODPRECIOP',
            'CODRETE',
            'CODRETEP',
            'CODRUTA',
            'COL_DEL',
            'COMENTARIO',
            'CONTACTO',
            'CONTRIBUYE',
            'CTACTE',
            'CUPOCR',
            'CUPOCRP',
            'CURP',
            'DESCCOMER',
            'DESCCOMERP',
            'DESCFINAN',
            'DESCFINANP',
            'DETALLE',
            'DIRECCION',
            'EMAIL',
            'EMAILP',
            'ENTRECALLE',
            'ESCLIENTE',
            'ESPROVEE',
            'ESTRATO',
            'EXTERIOR',
            'FECHAING',
            'FECNAC',
            'HABILITADO',
            'IDENTIFICA',
            'INTCAR',
            'LOCAL',
            'NIT',
            'NITSUCUR',
            'NOMBRE',
            'NOMBRE1',
            'NOMBRE2',
            'NRORESOL',
            'NUMCTA',
            'PAGINAWEB',
            'PASSWORD',
            'PASSWPROV',
            'PERIODOFAC',
            'PLAZO',
            'PLAZOP',
            'PORAIU',
            'PORAIUP',
            'PRETICA',
            'PRETICAP',
            'PRETIVA',
            'PRETIVAP',
            'REGSIMP',
            'REPORTDC',
            'RESPRETE',
            'RETICA',
            'RETICAP',
            'STADSINCRO',
            'SUCURSAL',
            'TEL1',
            'TEL2',
            'TIPOCAR',
            'TIPOCLI',
            'TIPOCTA',
            'TIPOCXP',
            'TIPOIDEN',
            'TIPOPER',
            'TIPOPRV',
            'VENDEDOR',
            'ZONA',
            'PERSONANJ',
            'ISPROSPECT',
            'CLASE',
            'IDCANALENT',
            'PAIS',
            'XCOMENTAR2',
            'IDADJUNTOS',
            'INDEPENDIE',
            'AVALCOD',
            'AVALDIREC',
            'AVALNOMBRE',
            'AVALTEL',
            'CIUDADMX',
            'CONSUMIDOR',
            'CONTESP',
            'DELEGACION',
            'ESTADOMX',
            'LOCALIDAD',
            'NROENTREGA',
            'NROINTERNO',
            'PAISMX',
            'TIDENTI',
            'ESMAQUILA',
            'FECING',
            'FECMOD',
            'PASSWORDIN',
            'PASSWORDMO',
            'PRETPERC',
            'PRETPERP',
            'PORCBONOS',
            'CODDEPTO',
            'FACELECTRO',
            'NUMCUENTA',
            'ESDECLARA',
            'ESPERCAR',
            'ESRESPCREE',
            'ESRETCREE',
            'NDIAGRACIA',
            'MEADENDA',
            'CODCTANIIF',
            'CTANIIFPRV',
            'CODIMPBAN',
            'CLAVEPAGO',
            'MedPag',
            'FACTUELECT',
            'TELFACELEC',
            'ESPTICLCOM',
            'CDUSOCFDI',
            'codbarrio',
            'EMAILFACELECT',
            'POLIZA',
            'DIAVISITA',
            'FRECUENCIA',
            'ORDEN_VIS',
            'PROMESAENT',
            'PUNTOVENTA',
            'SEGMENTO',
            'TAMANO',
            'XLOCALIDAD',
            'COORD_X',
            'COORD_Y',
            'ESP_ESTADO',
            'ESP_NOMBREBARRIO',
            'ESP_ESCADENA',
            'ESP_JEFEVENTA'

    ];

    public $timestamps = false;


    
}
