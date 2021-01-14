Vulnerable rConfig Images
=========================

Demo images for CVE-2019-16662 and CVE-2019-16663.

## Info

This repository contains the setup to create two docker images running rConfig 3.9.2.
Each image contains an `/exploit.py` to trigger the vulnerability.

For further info have a look at the corresponding [blog post](https://www.sudokaikan.com/2019/11/cve-2019-16662-cve-2019-16663.html).

## Run

Also, you can just pull the image from docker hub:

```
docker run -it fab1ano/cve-2019-1666[2,3]
```

## Setup

```
docker build . -t fab1ano/rconfig-base
docker run -it fab1ano/rconfig-base
```

Now, do the install process on the website (`http://<ip>:<port>/install/index.php`, database info: host `localhost`, port `3306`, db name `rconfig`, user `root`, password empty).
And fix `/home/rconfig/config/config.inc.php` in the container (remove https-forwarding).

Now, commit the modified container to the image:

```
docker commit <container_id> fab1ano/rconfig-base
docker push fab1ano/rconfig-base
```

Then, build the two cve images.
Run the following commands for each subdirectory:

```
cd cve-2019-1666[2,3]
docker build . -t fab1ano/cve-2019-1666[2,3]
docker push fab1ano/cve-2019-1666[2,3]
```
