<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link');
            $table->string('url');
            
            
            $table->integer('US_visit');
            $table->integer('CA_visit');
            $table->integer('GB_visit');
            $table->integer('AU_visit');
            $table->integer('DE_visit');
            $table->integer('NO_visit');
            $table->integer('AE_visit');
            $table->integer('SE_visit');
            $table->integer('ZA_visit');
            $table->integer('FI_visit');
            $table->integer('DK_visit');
            $table->integer('NZ_visit');
            $table->integer('PL_visit');
            $table->integer('IE_visit');
            $table->integer('CH_visit');
            $table->integer('KW_visit');
            $table->integer('QA_visit');
            $table->integer('SA_visit');
            $table->integer('BE_visit');
            $table->integer('ES_visit');
            $table->integer('KR_visit');
            $table->integer('OM_visit');
            $table->integer('CY_visit');
            $table->integer('NL_visit');
            $table->integer('CZ_visit');
            $table->integer('IS_visit');
            $table->integer('LU_visit');
            $table->integer('GR_visit');
            $table->integer('FR_visit');
            $table->integer('SG_visit');
            $table->integer('IL_visit');
            $table->integer('JP_visit');
            $table->integer('MY_visit');
            $table->integer('NG_visit');
            $table->integer('PT_visit');
            $table->integer('IQ_visit');
            $table->integer('LV_visit');
            $table->integer('PS_visit');
            $table->integer('SI_visit');
            $table->integer('RU_visit');
            $table->integer('BG_visit');
            $table->integer('RS_visit');
            $table->integer('ME_visit');
            $table->integer('TH_visit');
            $table->integer('LK_visit');
            $table->integer('MM_visit');
            $table->integer('IT_visit');
            $table->integer('JO_visit');
            $table->integer('KE_visit');
            $table->integer('IR_visit');
            $table->integer('GH_visit');
            $table->integer('PA_visit');
            $table->integer('MO_visit');
            $table->integer('KZ_visit');
            $table->integer('BD_visit');
            $table->integer('EE_visit');
            $table->integer('LT_visit');
            $table->integer('GE_visit');
            $table->integer('MX_visit');
            $table->integer('IO_visit');
            $table->integer('MD_visit');
            $table->integer('TZ_visit');
            $table->integer('INDO_visit');
            $table->integer('CI_visit');
            $table->integer('BR_visit');
            $table->integer('BA_visit');
            $table->integer('HN_visit');
            $table->integer('IN_visit');
            $table->integer('VN_visit');
            $table->integer('TW_visit');
            $table->integer('GT_visit');
            $table->integer('CN_visit');
            $table->integer('KH_visit');
            $table->integer('AT_visit');
            $table->integer('SK_visit');
            $table->integer('AM_visit');
            $table->integer('AL_visit');
            $table->integer('MK_visit');
            $table->integer('TM_visit');
            $table->integer('LB_visit');
            $table->integer('EC_visit');
            $table->integer('PH_visit');
            $table->integer('HU_visit');
            $table->integer('EG_visit');
            $table->integer('PK_visit');
            $table->integer('CM_visit');
            $table->integer('UA_visit');
            $table->integer('BM_visit');
            $table->integer('NC_visit');
            $table->integer('LY_visit');
            $table->integer('AR_visit');
            $table->integer('HK_visit');
            $table->integer('TR_visit');
            $table->integer('DZ_visit');
            $table->integer('RO_visit');
            $table->integer('BS_visit');
            $table->integer('GL_visit');
            $table->integer('ZW_visit');
            $table->integer('LR_visit');
            $table->integer('MF_visit');
            $table->integer('BT_visit');
            $table->integer('GF_visit');
            $table->integer('NP_visit');
            $table->integer('AF_visit');
            $table->integer('CU_visit');
            $table->integer('SV_visit');
            $table->integer('SM_visit');
            $table->integer('others_visit');


            $table->integer('US_visit_mobile');
            $table->integer('CA_visit_mobile');
            $table->integer('GB_visit_mobile');
            $table->integer('AU_visit_mobile');
            $table->integer('DE_visit_mobile');
            $table->integer('NO_visit_mobile');
            $table->integer('AE_visit_mobile');
            $table->integer('SE_visit_mobile');
            $table->integer('ZA_visit_mobile');
            $table->integer('FI_visit_mobile');
            $table->integer('DK_visit_mobile');
            $table->integer('NZ_visit_mobile');
            $table->integer('PL_visit_mobile');
            $table->integer('IE_visit_mobile');
            $table->integer('CH_visit_mobile');
            $table->integer('KW_visit_mobile');
            $table->integer('QA_visit_mobile');
            $table->integer('SA_visit_mobile');
            $table->integer('BE_visit_mobile');
            $table->integer('ES_visit_mobile');
            $table->integer('KR_visit_mobile');
            $table->integer('OM_visit_mobile');
            $table->integer('CY_visit_mobile');
            $table->integer('NL_visit_mobile');
            $table->integer('CZ_visit_mobile');
            $table->integer('IS_visit_mobile');
            $table->integer('LU_visit_mobile');
            $table->integer('GR_visit_mobile');
            $table->integer('FR_visit_mobile');
            $table->integer('SG_visit_mobile');
            $table->integer('IL_visit_mobile');
            $table->integer('JP_visit_mobile');
            $table->integer('MY_visit_mobile');
            $table->integer('NG_visit_mobile');
            $table->integer('PT_visit_mobile');
            $table->integer('IQ_visit_mobile');
            $table->integer('LV_visit_mobile');
            $table->integer('PS_visit_mobile');
            $table->integer('SI_visit_mobile');
            $table->integer('RU_visit_mobile');
            $table->integer('BG_visit_mobile');
            $table->integer('RS_visit_mobile');
            $table->integer('ME_visit_mobile');
            $table->integer('TH_visit_mobile');
            $table->integer('LK_visit_mobile');
            $table->integer('MM_visit_mobile');
            $table->integer('IT_visit_mobile');
            $table->integer('JO_visit_mobile');
            $table->integer('KE_visit_mobile');
            $table->integer('IR_visit_mobile');
            $table->integer('GH_visit_mobile');
            $table->integer('PA_visit_mobile');
            $table->integer('MO_visit_mobile');
            $table->integer('KZ_visit_mobile');
            $table->integer('BD_visit_mobile');
            $table->integer('EE_visit_mobile');
            $table->integer('LT_visit_mobile');
            $table->integer('GE_visit_mobile');
            $table->integer('MX_visit_mobile');
            $table->integer('IO_visit_mobile');
            $table->integer('MD_visit_mobile');
            $table->integer('TZ_visit_mobile');
            $table->integer('INDO_visit_mobile');
            $table->integer('CI_visit_mobile');
            $table->integer('BR_visit_mobile');
            $table->integer('BA_visit_mobile');
            $table->integer('HN_visit_mobile');
            $table->integer('IN_visit_mobile');
            $table->integer('VN_visit_mobile');
            $table->integer('TW_visit_mobile');
            $table->integer('GT_visit_mobile');
            $table->integer('CN_visit_mobile');
            $table->integer('KH_visit_mobile');
            $table->integer('AT_visit_mobile');
            $table->integer('SK_visit_mobile');
            $table->integer('AM_visit_mobile');
            $table->integer('AL_visit_mobile');
            $table->integer('MK_visit_mobile');
            $table->integer('TM_visit_mobile');
            $table->integer('LB_visit_mobile');
            $table->integer('EC_visit_mobile');
            $table->integer('PH_visit_mobile');
            $table->integer('HU_visit_mobile');
            $table->integer('EG_visit_mobile');
            $table->integer('PK_visit_mobile');
            $table->integer('CM_visit_mobile');
            $table->integer('UA_visit_mobile');
            $table->integer('BM_visit_mobile');
            $table->integer('NC_visit_mobile');
            $table->integer('LY_visit_mobile');
            $table->integer('AR_visit_mobile');
            $table->integer('HK_visit_mobile');
            $table->integer('TR_visit_mobile');
            $table->integer('DZ_visit_mobile');
            $table->integer('RO_visit_mobile');
            $table->integer('BS_visit_mobile');
            $table->integer('GL_visit_mobile');
            $table->integer('ZW_visit_mobile');
            $table->integer('LR_visit_mobile');
            $table->integer('MF_visit_mobile');
            $table->integer('BT_visit_mobile');
            $table->integer('GF_visit_mobile');
            $table->integer('NP_visit_mobile');
            $table->integer('AF_visit_mobile');
            $table->integer('CU_visit_mobile');
            $table->integer('SV_visit_mobile');
            $table->integer('SM_visit_mobile');
            $table->integer('others_visit_mobile');

            $table->integer('US_visit_r');
            $table->integer('CA_visit_r');
            $table->integer('GB_visit_r');
            $table->integer('AU_visit_r');
            $table->integer('DE_visit_r');
            $table->integer('NO_visit_r');
            $table->integer('AE_visit_r');
            $table->integer('SE_visit_r');
            $table->integer('ZA_visit_r');
            $table->integer('FI_visit_r');
            $table->integer('DK_visit_r');
            $table->integer('NZ_visit_r');
            $table->integer('PL_visit_r');
            $table->integer('IE_visit_r');
            $table->integer('CH_visit_r');
            $table->integer('KW_visit_r');
            $table->integer('QA_visit_r');
            $table->integer('SA_visit_r');
            $table->integer('BE_visit_r');
            $table->integer('ES_visit_r');
            $table->integer('KR_visit_r');
            $table->integer('OM_visit_r');
            $table->integer('CY_visit_r');
            $table->integer('NL_visit_r');
            $table->integer('CZ_visit_r');
            $table->integer('IS_visit_r');
            $table->integer('LU_visit_r');
            $table->integer('GR_visit_r');
            $table->integer('FR_visit_r');
            $table->integer('SG_visit_r');
            $table->integer('IL_visit_r');
            $table->integer('JP_visit_r');
            $table->integer('MY_visit_r');
            $table->integer('NG_visit_r');
            $table->integer('PT_visit_r');
            $table->integer('IQ_visit_r');
            $table->integer('LV_visit_r');
            $table->integer('PS_visit_r');
            $table->integer('SI_visit_r');
            $table->integer('RU_visit_r');
            $table->integer('BG_visit_r');
            $table->integer('RS_visit_r');
            $table->integer('ME_visit_r');
            $table->integer('TH_visit_r');
            $table->integer('LK_visit_r');
            $table->integer('MM_visit_r');
            $table->integer('IT_visit_r');
            $table->integer('JO_visit_r');
            $table->integer('KE_visit_r');
            $table->integer('IR_visit_r');
            $table->integer('GH_visit_r');
            $table->integer('PA_visit_r');
            $table->integer('MO_visit_r');
            $table->integer('KZ_visit_r');
            $table->integer('BD_visit_r');
            $table->integer('EE_visit_r');
            $table->integer('LT_visit_r');
            $table->integer('GE_visit_r');
            $table->integer('MX_visit_r');
            $table->integer('IO_visit_r');
            $table->integer('MD_visit_r');
            $table->integer('TZ_visit_r');
            $table->integer('INDO_visit_r');
            $table->integer('CI_visit_r');
            $table->integer('BR_visit_r');
            $table->integer('BA_visit_r');
            $table->integer('HN_visit_r');
            $table->integer('IN_visit_r');
            $table->integer('VN_visit_r');
            $table->integer('TW_visit_r');
            $table->integer('GT_visit_r');
            $table->integer('CN_visit_r');
            $table->integer('KH_visit_r');
            $table->integer('AT_visit_r');
            $table->integer('SK_visit_r');
            $table->integer('AM_visit_r');
            $table->integer('AL_visit_r');
            $table->integer('MK_visit_r');
            $table->integer('TM_visit_r');
            $table->integer('LB_visit_r');
            $table->integer('EC_visit_r');
            $table->integer('PH_visit_r');
            $table->integer('HU_visit_r');
            $table->integer('EG_visit_r');
            $table->integer('PK_visit_r');
            $table->integer('CM_visit_r');
            $table->integer('UA_visit_r');
            $table->integer('BM_visit_r');
            $table->integer('NC_visit_r');
            $table->integer('LY_visit_r');
            $table->integer('AR_visit_r');
            $table->integer('HK_visit_r');
            $table->integer('TR_visit_r');
            $table->integer('DZ_visit_r');
            $table->integer('RO_visit_r');
            $table->integer('BS_visit_r');
            $table->integer('GL_visit_r');
            $table->integer('ZW_visit_r');
            $table->integer('LR_visit_r');
            $table->integer('MF_visit_r');
            $table->integer('BT_visit_r');
            $table->integer('GF_visit_r');
            $table->integer('NP_visit_r');
            $table->integer('AF_visit_r');
            $table->integer('CU_visit_r');
            $table->integer('SV_visit_r');
            $table->integer('SM_visit_r');
            $table->integer('others_visit_r');

            $table->integer('US_visit_mr');
            $table->integer('CA_visit_mr');
            $table->integer('GB_visit_mr');
            $table->integer('AU_visit_mr');
            $table->integer('DE_visit_mr');
            $table->integer('NO_visit_mr');
            $table->integer('AE_visit_mr');
            $table->integer('SE_visit_mr');
            $table->integer('ZA_visit_mr');
            $table->integer('FI_visit_mr');
            $table->integer('DK_visit_mr');
            $table->integer('NZ_visit_mr');
            $table->integer('PL_visit_mr');
            $table->integer('IE_visit_mr');
            $table->integer('CH_visit_mr');
            $table->integer('KW_visit_mr');
            $table->integer('QA_visit_mr');
            $table->integer('SA_visit_mr');
            $table->integer('BE_visit_mr');
            $table->integer('ES_visit_mr');
            $table->integer('KR_visit_mr');
            $table->integer('OM_visit_mr');
            $table->integer('CY_visit_mr');
            $table->integer('NL_visit_mr');
            $table->integer('CZ_visit_mr');
            $table->integer('IS_visit_mr');
            $table->integer('LU_visit_mr');
            $table->integer('GR_visit_mr');
            $table->integer('FR_visit_mr');
            $table->integer('SG_visit_mr');
            $table->integer('IL_visit_mr');
            $table->integer('JP_visit_mr');
            $table->integer('MY_visit_mr');
            $table->integer('NG_visit_mr');
            $table->integer('PT_visit_mr');
            $table->integer('IQ_visit_mr');
            $table->integer('LV_visit_mr');
            $table->integer('PS_visit_mr');
            $table->integer('SI_visit_mr');
            $table->integer('RU_visit_mr');
            $table->integer('BG_visit_mr');
            $table->integer('RS_visit_mr');
            $table->integer('ME_visit_mr');
            $table->integer('TH_visit_mr');
            $table->integer('LK_visit_mr');
            $table->integer('MM_visit_mr');
            $table->integer('IT_visit_mr');
            $table->integer('JO_visit_mr');
            $table->integer('KE_visit_mr');
            $table->integer('IR_visit_mr');
            $table->integer('GH_visit_mr');
            $table->integer('PA_visit_mr');
            $table->integer('MO_visit_mr');
            $table->integer('KZ_visit_mr');
            $table->integer('BD_visit_mr');
            $table->integer('EE_visit_mr');
            $table->integer('LT_visit_mr');
            $table->integer('GE_visit_mr');
            $table->integer('MX_visit_mr');
            $table->integer('IO_visit_mr');
            $table->integer('MD_visit_mr');
            $table->integer('TZ_visit_mr');
            $table->integer('INDO_visit_mr');
            $table->integer('CI_visit_mr');
            $table->integer('BR_visit_mr');
            $table->integer('BA_visit_mr');
            $table->integer('HN_visit_mr');
            $table->integer('IN_visit_mr');
            $table->integer('VN_visit_mr');
            $table->integer('TW_visit_mr');
            $table->integer('GT_visit_mr');
            $table->integer('CN_visit_mr');
            $table->integer('KH_visit_mr');
            $table->integer('AT_visit_mr');
            $table->integer('SK_visit_mr');
            $table->integer('AM_visit_mr');
            $table->integer('AL_visit_mr');
            $table->integer('MK_visit_mr');
            $table->integer('TM_visit_mr');
            $table->integer('LB_visit_mr');
            $table->integer('EC_visit_mr');
            $table->integer('PH_visit_mr');
            $table->integer('HU_visit_mr');
            $table->integer('EG_visit_mr');
            $table->integer('PK_visit_mr');
            $table->integer('CM_visit_mr');
            $table->integer('UA_visit_mr');
            $table->integer('BM_visit_mr');
            $table->integer('NC_visit_mr');
            $table->integer('LY_visit_mr');
            $table->integer('AR_visit_mr');
            $table->integer('HK_visit_mr');
            $table->integer('TR_visit_mr');
            $table->integer('DZ_visit_mr');
            $table->integer('RO_visit_mr');
            $table->integer('BS_visit_mr');
            $table->integer('GL_visit_mr');
            $table->integer('ZW_visit_mr');
            $table->integer('LR_visit_mr');
            $table->integer('MF_visit_mr');
            $table->integer('BT_visit_mr');
            $table->integer('GF_visit_mr');
            $table->integer('NP_visit_mr');
            $table->integer('AF_visit_mr');
            $table->integer('CU_visit_mr');
            $table->integer('SV_visit_mr');
            $table->integer('SM_visit_mr');
            $table->integer('others_visit_mr');
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
