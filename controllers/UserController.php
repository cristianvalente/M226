<?php

namespace app\controllers;

use Yii;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
		
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())) {
            $data=Yii::$app->request->post('User');
           // echo '<pre>';print_r($data);die;
             $pass=$data['password_hash'];
            $first_name=$data['first_name'];
            
             $middle_name=$data['middle_name'];
              $last_name=$data['last_name'];
               $username=$data['username'];
                $email=$data['email'];
				 $job=$data['job'];
                $auth_key=$data['auth_key'];
                $status=$data['status'];
                $fk_role_id=$data['fk_role_id'];
                $created_at=$data['created_at'];
                $updated_at=$data['updated_at'];
                $profile=$data['profile'];
                
            //$model->password_hash = Yii::$app->security->generatePasswordHash($pass);
            // file uploading
          /*  $file =UploadedFile::getInstance($model, 'file');
            $file->saveAs(\Yii::$app->basePath . '/web/uploads/'.$file,false);
            $model->file=$file;*/

            $model->file = UploadedFile::getInstances($model, 'file');
           // echo '<pre>';print_r($model->file) ;die;
            foreach ($model->file as $file) {
                $models = new User();

                $models->password_hash = Yii::$app->security->generatePasswordHash($pass);
                    $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
                     $models->file=$file->baseName . '.' . $file->extension;
                    $models->first_name=$first_name;
                    $models->middle_name=$middle_name;
                    $models->last_name=$last_name;
                    $models->username=$username;
					$models->job=$job;
                    $models->email=$email;
                    $models->auth_key=$auth_key;

                    $models->status=$status;
                    $models->fk_role_id=$fk_role_id;
                     $models->created_at=$created_at;
                      $models->updated_at=$updated_at;

                      // single file
                 $filess =UploadedFile::getInstance($model, 'profile');
                $filess->saveAs(\Yii::$app->basePath . '/web/uploads/'.$filess,false);
                $models->profile=$filess;
                //single file ends
                      $models->save();
             $this->redirect(['index']);
                }
            // $model->file = UploadedFile::getInstances($model, 'file');
            // file uploading end
            /*$model->save();
            return $this->redirect(['index']);*/
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionProfile(){
	   
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $this->render('profile', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionAbout(){
        return $this->render('about');
    }
}
