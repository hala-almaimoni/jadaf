<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define('DB_NAME', 'jadafDatabase');

/** اسم مستخدم قاعدة البيانات */
define('DB_USER', 'root');

/** كلمة مرور قاعدة البيانات */
define('DB_PASSWORD', 'root');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8mb4');

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AB.x%Y2IHU`WhfEjquU{KwsAe_WZw_iKkHN&d>irNP7R/64H}{v4725PdlL8piqh');
define('SECURE_AUTH_KEY',  'K3z>3d]_iImNLR(g!^oNPA;bT$!bZp5+$fYser$}.$RjR~w$pkak|l[&yB]UEp:]');
define('LOGGED_IN_KEY',    'Qe;igc5:BmcY-E>]?CpW1W[*+4L~RD@{#3-Jt0_p1p>Q8?I!BMat]m%(1UyCI^gH');
define('NONCE_KEY',        '2T.3=$?[*cj_poCM#nbIr_&/o&K(r>>qkW^>[r4gu<7f8wS><UBfo*C(--{!<lD<');
define('AUTH_SALT',        'tz{}6Bu-VJBE1C9oqJ~1gRB0`[iqoj,ng!w?n3/)6qt,U@(,hWQ1<dwM.QsX ZC ');
define('SECURE_AUTH_SALT', '](1zL#&;t=<}+[v}O(X;:RqcUlCb.u2$d|1:@Q:m0aQq;CB,|J{X)=)g[0et}iS~');
define('LOGGED_IN_SALT',   'xAhOntOA7v1p$2S1aOx^?Z+83|+[ !Ys`ZJL>I4?p|^CqK;#_0==X -/& (82W|w');
define('NONCE_SALT',       '`vzLBi3T< 7<a%aoq-{4_bSa44WTIhTBgQAVXwOvuS~[q+h0<{ii%g$k+HFF)&j_');

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix  = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once(ABSPATH . 'wp-settings.php');