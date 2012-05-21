<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'FluxBB 갱신하기',
'Update message'				=>	'FluxBB 데이터베이스가 오래되어서 계속하려면 판올림을 해야 한다. 게시판 다룸이라면 판올림을 끝맺기 위해 아래 지시를 따라라.',
'Note'							=>	'알림:',
'Members message'				=>	'이 과정은 게시판 다룸이만을 위한 것이다. 회원이라면 걱정할 것이 아무것도 없다 - 포럼은 바로 돌아올 것이다!',
'Administrator only'			=>	'이 단계는 게시판 다룸이만을 위한 것이다!',
'Database password info'		=>	'데이터베이스 갱신을 하려면 FluxBB가 설치된 데이터베이스의 비밀번호를 넣어라. 기억하지 못해도 \'config.php\' 파일에 저장되어 있다.',
'Database password note'		=>	'SQLite를 쓴다면 (거기다 데이터베이스 비밀번호로 없다면) 대신 데이터베이스 파일의 이름을 써라. configuration 파일에 있는 데이터베이스 파일 이름과 정확히 맞아야 한다.',
'Database password'				=>	'데이터베이스 비밀번호',
'Maintenance'					=>	'점검',
'Maintenance message info'		=>	'갱신하는 동안, 회원에게 보여줄 쪽지. 이 글귀는 일반 글처럼 분석되지 않으므로 HTML을 가져도 된다.',
'Maintenance message'		    =>	'점검 쪽지',
'Next'							=>	'다음',

'You are running error'			=>	'%1$s 판번호 %2$s을 쓰고 있다. FluxBB %3$s가 제대로 동작하려면 적어도 %1$s %4$s가 있어야 한다. 계속하려면 %1$s을 판올림해야 한다.',
'Version mismatch error'		=>	'판번호가 맞지 않다. 데이터베이스 \'%s\'가 이 갱신 스크립트에 의해 지원되는 FluxBB 데이터베이스 스키마를 동작시키지 않는 것 같다.',
'Invalid file error'			=>	'데이터베이스 파일 이름이 올바르지 않다. SQLite을 쓸 때 \'%s\'에 보이는 대로 정확하게 데이터베이스 파일 이름을 넣어야 한다.',
'Invalid password error'		=>	'데이터베이스 비밀번호가 올바르지 않다. FluxBB를 판올림하려면 \'%s\'에 보이는 대로 정확하게 데이터베이스 비밀번호를 넣어야 한다.',
'No password error'				=>	'넣은 비밀번호가 없다',
'Script runs error'				=>	'다른 누군가가 이미 갱신 스크립트를 실행시킨 것 같다. 아니라면 \'%s\' 파일을 손수 지우고 다시 해 보아라',
'No update error'				=>	'이 스크립트갈 할 수 있는 만큼 포럼이 이미 갱신되었다',

'Intro 1'						=>	'이 스크립트가 포럼 데이터베이스를 갱신할 것이다. 서버의 속도와 포럼 데이터베이스의 크기에 따라서 갱신 절차는 몇 시간까지 걸릴 수 있다. 계속하기에 앞서서 데이터베이스를 백업하는 것을 잊지 말아라.',
'Intro 2'						=>	'문서에서 갱신 과정을 읽었나? 안 읽었다면 가서 읽어라.',
'No charset conversion'			=>	'<strong>중요!</strong> PHP 환경이 ISO-8859-1 외의 문자셋을 UTF-8로 바꾸기 위해 필요한 encoding mechanisms을 지원하지 않는다는 것을 FluxBB가 알아내었다. 이 것은 지금의 문자셋이 ISO-8859-1이 아니면  FluxBB는 포럼 데이터베이스를 UTF-8로 바꿀 수 없고 갱신 과정에 찾을 수 있는 문자셋 손수 바꾸기 절차를 손수 해주어야 한다는 것을 뜻 한다.',
'Enable conversion'				=>	'<strong>바꾸기 켜기:</strong> 이 것을 켜면 데이터베이스에 필요한 구조 변경을 한 뒤에 이 갱신 스크립트는 데이터베이스에 있는 모든 글귀를 지금 문자셋에서 UTF-8로 바꿀 것이다. 이 바꾸기는 1.2 판번호에서 판올림할 때 필요하다.',
'Current character set'			=>	'<strong>현재 문자셋:</strong> 포럼의 글말이 영어라면 이 것을 기본값으로 남겨두어도 된다. 그러나 포럼이 영어가 아니라면 포럼에서 쓰는 글말 꾸러미의 문자셋을 넣어야 한다. <em>생각하기도 싫지만 이 것을 잘못하면 데이터베이스가 못 쓰게될 수 있다!</em> 알림: 오래된 데이터베이스가 UTF-8 일 때도 필요하다.',
'Charset conversion'			=>	'문자셋 바꾸기',
'Enable conversion label'		=>	'<strong>바꾸기 켜기</strong> (데이터베이스 문자셋 바꾸기를 한다).',
'Current character set label'	=>	'현재 문자셋',
'Current character set info'	=>	'영어 포럼은 기본값을 그렇지 않다면 글말 꾸러미의 문자셋을 받아들인다.',
'Start update'					=>	'갱신 시작하기',
'Error converting users'		=>	'회원 바꾸기 오류',
'Error info 1'					=>	'일부 회원을 바꾸는데 오류가 생겼다.  이 것은 FluxBB 1.2에서 여러 회원이 아주 비슷한 사용자명 (예 "bob" / "böb")으로 가입했다면 일어날 수 있다.',
'Error info 2'					=>	'아래는 바꾸기에 실패한 회원의 목록이다. 각 회원에게 새로운 사용자명을 골라 주어라. 이름이 바뀐 회원은 자동으로 이름 바꾸기에 관한 주의 메일을 받게 된다.',
'New username'					=>	'새로운 사용자명',
'Required'						=>	'(필수)',
'Correct errors'				=>	'다음 오류를 올바르게 고쳐야 한다:',
'Rename users'					=>	'회원 이름 바꾸기',
'Successfully updated'			=>	'포럼 데이터베이스를 제대로 갱신했다. 이제 %s를 해도 된다.',
'go to index'					=>	'포럼 처음으로 가기',

'Unable to lock error'			=>	'갱신 잠금을 쓸 수 없다. PHP가 \'%s\' 디렉토리에 쓸 수 있는지와 지금 다른 갱신 스크립트가 실행되고 있는지를 확인해라.',

'Converting'					=>	'%s을 바꾸고 있다 …',
'Converting item'				=>	'%1$s %2$s을 바꾸고 있다 …',
'Preparsing item'				=>	'%1$s %2$s을 준비하고 있다 …',
'Rebuilding index item'			=>	'%1$s %2$s의 색인을 다시 만들고 있다',

'ban'							=>	'금지',
'categories'					=>	'범주',
'censor words'					=>	'검열 단어',
'configuration'					=>	'구성',
'forums'						=>	'포럼',
'groups'						=>	'그룹',
'post'							=>	'글',
//'ranks'							=>	'등급',     <= 1.4
'report'						=>	'신고',
'topic'							=>	'글타래',
'user'							=>	'회원',
'signature'						=>	'서명',

'Username too short error'		=>	'사용자명은 적어도 2 characters 길이가 되어야 한다. 다른 (더 긴) 사용자명을 골라라.',
'Username too long error'		=>	'사용자명은 25 characters 보다 길면 안 된다. 다른 (더 짧은) 사용자명을 골라라.',
'Username Guest reserved error'	=>	'사용자명 guest은 이미 있다. 다른 사용자명을 골라라.',
'Username IP format error'		=>	'사용자명은 IP 주소 형식이면 안 된다. 다른 사용자명을 골라라.',
'Username bad characters error'	=>	'사용자명은 \', ", [ , ] 하나라도 가지면 안 된다. 다른 사용자명을 골라라.',
'Username BBCode error'			=>	'사용자명은 포럼에서 쓰는 글귀 형식화 태그 (BBCode) 를 가지면 안 된다. 다른 사용자명을 골라라.',
'Username duplicate error'		=>	'누군가 이미 %s 사용자명으로 가입했다. 넣은 사용자명은 너무 비슷하다. 사용자명은 적어도 하나의 alphanumerical character (a-z, 0-9)이 달라야 한다. 다른 사용자명을 골라라.',

//'JavaScript disabled'			=>	'JavaScript가 꺼져있는 것 같다. %s.',
//'Click here to continue'		=>	'계속하려면 여기를 눌러라',
//'Required field'				=>	'은 이 포럼에서 필요한 칸이다.'

);
