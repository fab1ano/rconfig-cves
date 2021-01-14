Vulnerable Images
=================

Demo images for CVE-2019-16662 and CVE-2019-16663.

## Setup

```
docker build . -t fab1ano/rconfig-base
docker run -it fab1ano/rconfig-base
```

Now, do the install process (`http://<ip>:<port>/install/index.php`, database info: host `localhost`, port `3306`, db name `rconfig`, user `root`, password empty).
And fix `/home/rconfig/config/config.inc.php` (remove some https-specific stuff).

Now, commit the modified container to the image:

```
docker commit <container_id> fab1ano/rconfig-base
docker push fab1ano/rconfig-base
```

Then, build the two cve images.
Run the following for both subdirectories:

```
pushd cve-2019-1666[2,3]
docker build . -t fab1ano/cve-2019-1666[2,3]
docker push fab1ano/cve-2019-1666[2,3]
popd
```
